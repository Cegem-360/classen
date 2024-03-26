<?php

namespace Database\Seeders;

use App\Enums\EndPoint;
use App\Enums\UrlPath;
use App\Models\Attribute;
use App\Models\Category;
use Automattic\WooCommerce\Client as WC;
use GuzzleHttp\Client;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    private Client $client;

    private WC $wooCommerce;

    public function run(): void
    {
        $this->client =
            new Client([
                'base_uri' => UrlPath::BASEURL,
            ]);
        $this->wooCommerce = new WC(
            UrlPath::BASEURLWC,
            'ck_dae8ceb27e124f2ecd884d0e1aff83ebed5bbdbd',
            'cs_d4b3236616414c18c5fd4e333313d7b2783676b8',
            [
                'version' => 'wc/v3',
            ]
        );
        //wooCommerce
        $woocommerceCategories = $this->wooCommerce->get(EndPoint::PRODUCTSCATEGORIES, ['per_page' => 100]);
        //blog
        $categories = collect(json_decode($this->client->get(EndPoint::CATEGORIES.'?per_page=100')->getBody(), true));
        //$categories = collect($categories);
        foreach ($woocommerceCategories as $woCategory) {
            $category = $categories->where('name', $woCategory->name)->first();
            //dump($category);
            if (is_null($category)) {
                continue;
            }
            ($category['acf']['additional_options'] == 'false') ? null : $category['acf']['additional_options'];
            ($category['acf']['door_specification'] == 'false') ? null : $category['acf']['door_specification'];
            ($category['acf']['technical_parameter'] == 'false') ? null : $category['acf']['technical_parameter'];
            $created_category = Category::factory()->create(
                [
                    'name' => $woCategory->name,
                    'category_id' => $woCategory->id,
                    'additional_options' => $category['acf']['additional_options'] ?? null,
                    'door_specification' => $category['acf']['door_specification'] ?? null,
                    'technical_parameter' => $category['acf']['technical_parameter'] ?? null,
                    'img_url' => $categories['acf']['galeria_kepek'][0] ?? null,
                    'gallery_imgs' => $categories['acf']['galeria_kepek'] ?? null,
                    'breadcrumb' => $categories['acf']['type'] ?? null,
                ]
            );
            $attributes = explode('|', $woCategory->description);
            foreach ($attributes as $attribute) {
                if (is_null($attribute)) {
                    continue;
                }
                if (isset($attribute) && $attribute != '') {
                    $attribute = Attribute::whereName($attribute)->first();
                    $created_category->attributes()->attach($attribute);
                }
            }

        }

    }

    public function str_replace_json($search, $replace, $subject)
    {
        return json_decode(str_replace($search, $replace, json_encode($subject)));
    }
}
