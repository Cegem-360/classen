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

        $categories = $woocommerce->get(EndPoint::PRODUCTSCATEGORIES, ['hide_empty' => true, 'per_page' => 100]);
        foreach ($categories as $category) {
            $response = $this->client->get(EndPoint::CATEGORIES . '?per_page=100');
            $data = json_decode($response->getBody(), true);
            $assetsTmp = collect($data);
            $assets = $assetsTmp->where('name', $category->name)->first();
            if (is_null($assets))
                continue;
            $additional_options = null;
            $door_specification = null;
            $technical_parameter = null;
            $img = null;
            //dd($category);
            $additional_options     = $assets['acf']['additional_options'];
            $door_specification     = $assets['acf']['door_specification'];
            $technical_parameter    = $assets['acf']['technical_parameter'];
            if (isset($category->image->src))
                $img = $category->image->src;
            $created_category = Category::factory()->create(
                [
                    'name' => $category->name,
                    'category_id' => $category->id,
                    'additional_options' => $additional_options,
                    'door_specification' => $door_specification,
                    'img_url' =>  $img,
                    'technical_parameter' => $technical_parameter,
                ]
            );


            $attributes = explode("|", $category->description);
            foreach ($attributes as $attribute) {
                if (is_null($attribute)) continue;
                if (isset($attribute) && $attribute != "") {
                    $attribute =  Attribute::whereName($attribute)->first();
                    $created_category->attributes()->attach($attribute);
                }
            }

            $products = $woocommerce->get(EndPoint::PRODUCTS, ['category' => $category->id, 'per_page' => 100, 'orderby' => 'title', 'order' => 'asc']);
            foreach ($products as $product) {
                $cover = $product->images[0]->src;
                try {
                    $tag = Cache::remember("tag_" . $product->tags[0]->name, 1, function () use ($woocommerce, $product) {
                        $tag = $woocommerce->get(EndPoint::PRODUCTSTAGS, ['search' => $product->tags[0]->name]);

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
                $category = Category::whereName($product->categories[0]->name)->first();
                Door::create([
                    'name' => $product->name,
                    'img_url' => $cover,
                    'category_id' => $category->id,
                    'tag' => $tag->name,
                    'tag_img_url' =>  $exploded[0],
                    'tag_category' => $exploded[1]
                ]);
            }
        }
    }
}
