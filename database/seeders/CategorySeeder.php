<?php

namespace Database\Seeders;

use App\Models\Door;
use App\Models\Color;
use App\Enums\UrlPath;
use GuzzleHttp\Client;
use App\Enums\EndPoint;
use App\Models\Category;
use App\Models\Attribute;
use App\Enums\PostPageIds;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;
use Automattic\WooCommerce\Client as WC;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    private Client $client;

    public function run(): void
    {
        $this->client =
            new Client([
                'base_uri' => UrlPath::BASEURL,
            ]);
        $woocommerce = new WC(
            UrlPath::BASEURLWC,
            'ck_dae8ceb27e124f2ecd884d0e1aff83ebed5bbdbd',
            'cs_d4b3236616414c18c5fd4e333313d7b2783676b8',
            [
                'version' => 'wc/v3',
            ]
        );

        $woocommerceCategories = $woocommerce->get(EndPoint::PRODUCTSCATEGORIES, ['hide_empty' => true, 'per_page' => 100]);
        foreach ($woocommerceCategories as $woocommerceCategory) {
            //categories (Post)
            $categories = $this->client->get(EndPoint::CATEGORIES . '?per_page=100');
            $categories = json_decode($categories->getBody(), true);
            $categories = collect($categories);
            $categories = $categories->where('name', $woocommerceCategory->name)->first();
            if (is_null($categories))
                continue;
            $additional_options = null;
            $door_specification = null;
            $technical_parameter = null;
            $img = null;
            $gallery_imgs = null;


            $additional_options = ($categories['acf']['additional_options']) ? $categories['acf']['additional_options'] : null;
            $additional_options = $this->str_replace_json('false', 'null', $additional_options);
            $door_specification = ($categories['acf']['door_specification']) ? $categories['acf']['door_specification'] : null;
            $door_specification = $this->str_replace_json('false', 'null', $door_specification);
            $technical_parameter = ($categories['acf']['technical_parameter']) ? $categories['acf']['technical_parameter'] : null;
            $technical_parameter = $this->str_replace_json('false', 'null', $technical_parameter);
            $gallery_imgs = $categories['acf']['galeria_kepek'] ?? null;
            $img = $categories['acf']['galeria_kepek'][0] ?? null;
            $created_category = Category::factory()->create(
                [
                    'name' => $woocommerceCategory->name,
                    'category_id' => $woocommerceCategory->id,
                    'additional_options' => $additional_options,
                    'door_specification' => $door_specification,
                    'technical_parameter' => $technical_parameter,
                    'img_url' => $img,
                    'gallery_imgs' => $gallery_imgs,
                    'breadcrumb' => $categories['acf']['type'],
                ]
            );


            $attributes = explode("|", $woocommerceCategory->description);
            foreach ($attributes as $attribute) {
                if (is_null($attribute))
                    continue;
                if (isset($attribute) && $attribute != "") {
                    $attribute = Attribute::whereName($attribute)->first();
                    $created_category->attributes()->attach($attribute);
                }
            }

            $products = $woocommerce->get(EndPoint::PRODUCTS, ['category' => $woocommerceCategory->id, 'per_page' => 100, 'orderby' => 'title', 'order' => 'asc']);
            foreach ($products as $product) {
                $cover = $product->images[0]->src;
                try {

                    $tag = Cache::remember("tag_slug_" . $product->tags[0]->slug, 1, function () use ($woocommerce, $product) {
                        $tag = $woocommerce->get(EndPoint::PRODUCTSTAGS, ['slug' => $product->tags[0]->slug]);
                        return $tag;
                    });
                } catch (\Throwable $th) {
                    dd($product);
                }


                if (is_null($tag))
                    continue;
                $tag = collect($tag)->first();
                $exploded = ['', ''];
                $exploded = explode('|', $tag->description);
                if (!isset($exploded[1]))
                    $exploded = [$exploded[0], ''];
                $woocommerceCategory = Category::whereName($product->categories[0]->name)->first();
                Door::create([
                    'name' => $product->name,
                    'img_url' => $cover,
                    'category_id' => $woocommerceCategory->id,
                    'tag' => $tag->slug,
                    'tag_name' => $tag->name,
                    'tag_img_url' => $exploded[0],
                    'tag_category' => $exploded[1]
                ]);
            }
        }
    }
    function str_replace_json($search, $replace, $subject)
    {
        return json_decode(str_replace($search, $replace, json_encode($subject)));
    }
}
