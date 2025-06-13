<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Enums\EndPoint;
use App\Enums\UrlPath;
use App\Models\Category;
use App\Models\Door;
use Automattic\WooCommerce\Client as WC;
use Automattic\WooCommerce\HttpClient\HttpClientException;
use Illuminate\Database\Seeder;

final class DoorSeeder extends Seeder
{
    public function run(): void
    {
        $woocommerce = new WC(
            UrlPath::BASEURLWC,
            'ck_dae8ceb27e124f2ecd884d0e1aff83ebed5bbdbd',
            'cs_d4b3236616414c18c5fd4e333313d7b2783676b8',
            [
                'timeout' => 300,
            ]
        );
        try {
            $products = $woocommerce->get(EndPoint::PRODUCTS, ['limit' => 10000]);
            $products_tags = collect($woocommerce->get(EndPoint::PRODUCTSTAGS, ['per_page' => 100]));
            // dump($products_tags);
            foreach ($products as $product) {
                // dump($product);
                if (empty($product->images)) {
                    continue;
                }

                if (! isset($product->images[0]->src)) {
                    continue;
                }

                $cover = $product->images[0]->src;
                if (isset($product->tags[0])) {
                    $tag = $products_tags->where('slug', $product->tags[0]->slug)->first();
                } else {
                    $tag = $products_tags->where('slug', 'uni-white')->first();
                }

                if (is_null($tag)) {
                    continue;
                }

                $exploded = explode('|', (string) $tag->description);
                if (! isset($exploded[1])) {
                    $exploded = [$exploded[0], ''];
                }

                if (! is_numeric($product->regular_price)) {
                    $product->regular_price = 0;
                }

                $woocommerceCategory = Category::whereName($product->categories[0]->name)->first();

                Door::create([
                    'id' => $product->id,
                    'product_id' => $product->id,
                    'price' => $product->regular_price,
                    'name' => $product->name,
                    'img_url' => $cover,
                    'category_id' => $woocommerceCategory->id,
                    'tag' => $tag->slug,
                    'tag_name' => $tag->name,
                    'tag_img_url' => $exploded[0],
                    'tag_category' => $exploded[1],
                ]);
            }
        } catch (HttpClientException $httpClientException) {
            echo '<pre><code>'.print_r($httpClientException->getMessage(), true).'</code><pre>'; // Error message.
            echo '<pre><code>'.print_r($httpClientException->getRequest(), true).'</code><pre>'; // Last request data.
            echo '<pre><code>'.print_r($httpClientException->getResponse(), true).'</code><pre>'; // Last response data.
        }
    }
}
