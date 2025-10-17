<?php

declare(strict_types=1);

namespace App\Console\Commands;

use App\Enums\EndPoint;
use App\Enums\UrlPath;
use App\Imports\AdditionalAttributeImport;
use App\Models\Attribute;
use App\Models\Category;
use App\Models\Door;
use Automattic\WooCommerce\Client as WC;
use Automattic\WooCommerce\HttpClient\HttpClientException;
use Excel;
use GuzzleHttp\Client;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

final class ImportWoocommerce extends Command
{
    /**
     * Helper
     */
    public Client $client;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:import-woocommerce';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    private WC $wooCommerce;

    /**
     * Execute the console command.
     */
    public function handle()
    {
        DB::table('products')->truncate();
        DB::table('doors')->truncate();
        DB::table('attributes')->truncate();
        DB::table('categories')->truncate();

        $this->wooCommerce = new WC(
            UrlPath::BASEURLWC,
            'ck_dae8ceb27e124f2ecd884d0e1aff83ebed5bbdbd',
            'cs_d4b3236616414c18c5fd4e333313d7b2783676b8',
            [
                'version' => 'wc/v3',
                'timeout' => 300,
            ]
        );
        $this->client =
            new Client([
                'base_uri' => UrlPath::BASEURL,
                'timeout' => 120,
            ]);
        $response =
            $this->client->get(EndPoint::DESIGFORMS.'?per_page=25', [['timeout' => 120]]);
        $designForms = json_decode($response->getBody()->getContents(), true);
        foreach ($designForms as $designForm) {
            $imgUrl =
                $this->client->get($designForm['_links']['wp:attachment'][0]['href']);
            $imgUrl = json_decode($imgUrl->getBody()->getContents());
            $imgUrl = collect($imgUrl)->first();
            Attribute::factory(1)->create([
                'name' => $designForm['title']['rendered'],
                'value' => $designForm['content']['rendered'],
                'img' => $imgUrl->source_url,
                'slug' => $designForm['slug'],
            ]);
        }

        // wooCommerce

        $woocommerceCategories = $this->wooCommerce->get(EndPoint::PRODUCTSCATEGORIES, ['per_page' => 100, 'exclude' => ['15']]);
        // blog
        $categories = collect(json_decode($this->client->get(EndPoint::CATEGORIES.'?per_page=100', ['timeout' => 120])->getBody()->getContents(), true));
        foreach ($woocommerceCategories as $woCategory) {
            $category = $categories->where('name', $woCategory->name)->first();
            if (is_null($category)) {
                continue;
            }

            $category['acf']['additional_options'] = ($category['acf']['additional_options'] === false) ? null : $category['acf']['additional_options'];
            $category['acf']['additional_options'] = $this->str_replace_json('false', 'null', $category['acf']['additional_options']);
            $category['acf']['door_specification'] = ($category['acf']['door_specification'] === false) ? null : $category['acf']['door_specification'];
            $category['acf']['door_specification'] = $this->str_replace_json('false', 'null', $category['acf']['door_specification']);
            $category['acf']['technical_parameter'] = ($category['acf']['technical_parameter'] === false) ? null : $category['acf']['technical_parameter'];
            $category['acf']['technical_parameter'] = $this->str_replace_json('false', 'null', $category['acf']['technical_parameter']);
            $created_category = Category::factory()->create(
                [
                    'name' => $woCategory->name,
                    'category_id' => $woCategory->id,
                    'additional_options' => $category['acf']['additional_options'] ?? null,
                    'door_specification' => $category['acf']['door_specification'] ?? null,
                    'technical_parameter' => $category['acf']['technical_parameter'] ?? null,
                    'img_url' => $category['acf']['galeria_kepek'][0] ?? null,
                    'gallery_imgs' => $category['acf']['galeria_kepek'] ?? null,
                    'breadcrumb' => $category['acf']['type'] ?? null,
                ]
            );
            $attributes = explode('|', (string) $woCategory->description);
            foreach ($attributes as $attribute) {
                if (is_null($attribute)) {
                    continue;
                }

                if ($attribute !== '') {
                    $attribute = Attribute::whereName($attribute)->first();
                    $created_category->attributes()->attach($attribute);
                }
            }

        }

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

        $path = storage_path('app/public/arcadiaAdditionalAttributes.csv');

        Excel::import(new AdditionalAttributeImport, $path);
        $this->client = new Client(
            [
                'base_uri' => UrlPath::BASEURL,
            ]
        );

    }
}
