<?php

namespace Database\Seeders;

use App\Enums\EndPoint;
use App\Enums\UrlPath;
use App\Models\WebsiteOptions;
use GuzzleHttp\Client;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public Client $client;

    public function run(): void
    {
        $this->call([
            AttributeSeeder::class,
            CategorySeeder::class,
            DoorSeeder::class,
            AdditionalAttributeSeeder::class,
        ]);
        $this->client = new Client(
            [
                'base_uri' => UrlPath::BASEURL,
                'timeout' => 120,
            ]
        );
        //$this->client->
        $response = $this->client->request('GET', EndPoint::LARAVELWEBSITEOPTIONS, ['timeout' => 120]);
        $result = json_decode($response->getBody(), true);
        $result = $result[0]['acf'];
        foreach ($result['fooldal_hero_banner'] as $value) {
            WebsiteOptions::updateOrCreate([
                'name' => 'fooldal_hero_banner_kepek',
                'key' => 'kep',
                'value' => $value['kep']['url'],
            ]);
            WebsiteOptions::updateOrCreate([
                'name' => 'fooldal_hero_banner_kepek',
                'key' => 'szoveg',
                'value' => $value['szoveg'],
            ]);
        }
    }
}
