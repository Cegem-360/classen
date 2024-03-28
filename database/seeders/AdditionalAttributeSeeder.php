<?php

namespace Database\Seeders;

use App\Enums\EndPoint;
use App\Enums\UrlPath;
use App\Imports\AdditionalAttributeImport;
use App\Models\WebsiteOptions;
use Excel;
use GuzzleHttp\Client;
use Illuminate\Database\Seeder;

class AdditionalAttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public Client $client;

    public function run(): void
    {
        $path = storage_path('app/public/arcadiaAdditionalAttributes.csv');

        Excel::import(new AdditionalAttributeImport, $path);
        $this->client = new Client(
            [
                'base_uri' => UrlPath::BASEURL,
            ]
        );
        //$this->client->
        $response = $this->client->get(EndPoint::LARAVELWEBSITEOPTIONS, ['timeout' => 120]);
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
