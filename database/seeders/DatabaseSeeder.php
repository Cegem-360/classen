<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Enums\EndPoint;
use App\Enums\UrlPath;
use App\Models\Category;
use App\Models\Door;
use App\Models\User;
use Automattic\WooCommerce\Client as WC;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

final class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::factory()->create(
            [
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'password' => Hash::make('password'),
                'email_verified_at' => now(),
            ]
        );

        $this->call([
            MetaKeyWordsSeeder::class,
            AttributeSeeder::class,
            CategorySeeder::class,
            DoorSeeder::class,
            AdditionalAttributeSeeder::class,
            BlogSeeder::class,
        ]);
        $woocommerce = new WC(
            UrlPath::BASEURLWC,
            'ck_dae8ceb27e124f2ecd884d0e1aff83ebed5bbdbd',
            'cs_d4b3236616414c18c5fd4e333313d7b2783676b8',
            [
                'timeout' => 300,
            ]
        );
        $doorNames = ['A1', 'A2', 'A3', 'A4', 'A5', 'A6', 'A7', 'A8', 'A9', 'A10', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T'];
        $doorOruletColorsTags = [
            'white',
            'acacia-st',
            'natural-oak',
            'polish-oak',
            'wenge',
            'riviera-oak',
            'white-ash',
            'sonoma-oak',
            'columbia-light-walnut',
            'oiled-oak',
            'gray-oak',
            'catania-oak',
            'anthracite-oak',
            'burnt-oak',
            'honey-catania',
            'cleveland-oak',
            'white-matt',
            'snow-ash',
            'brown-ash',
            'graphite-ash',
            'marone-oak',
            'wenge',
            'uni-black',
            'hamilton-oak',
            'light-acacia',
            'norwegian-ash',
            'white-ral-9003',
            'white-horizontal-structure',
            'antique-oak',
            'italian-walnut',
            'graphite-oak',
            'graphite-ral-7024'];
        $doorOruletDoors = Category::whereName('Door őrület')->first();
        $products_tags = collect($woocommerce->get(EndPoint::PRODUCTSTAGS, ['per_page' => 100]));

        foreach ($doorNames as $doorName) {
            foreach ($doorOruletColorsTags as $slug) {
                $tag = $products_tags->where('slug', $slug)->first();
                $exploded = ['', ''];
                if (is_null($tag)) {
                    dump($tag);
                    dump($slug);

                    continue;
                }
                $exploded = explode('|', $tag->description);
                if (! isset($exploded[1])) {
                    $exploded = [$exploded[0], ''];
                }
                Door::create([
                    'price' => 0,
                    'name' => $doorName,
                    'img_url' => 'resources/img/placeholder.webp',
                    'category_id' => $doorOruletDoors->id,
                    'tag' => $tag->slug,
                    'tag_name' => $tag->name,
                    'tag_img_url' => $exploded[0],
                    'tag_category' => $exploded[1],
                ]);
            }
        }

    }
}
