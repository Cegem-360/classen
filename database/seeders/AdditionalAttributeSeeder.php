<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Enums\EndPoint;
use App\Enums\UrlPath;
use App\Imports\AdditionalAttributeImport;
use App\Models\WebsiteOptions;
use Excel;
use GuzzleHttp\Client;
use Illuminate\Database\Seeder;

final class AdditionalAttributeSeeder extends Seeder
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
        // $this->client->
        $response = $this->client->get(EndPoint::LARAVELWEBSITEOPTIONS, ['timeout' => 120]);
        $result = json_decode($response->getBody(), true);
        $result = $result[0]['acf'];
        foreach ($result['fooldal_hero_banner'] as $value) {
            WebsiteOptions::updateOrCreate([
                'name' => 'fooldal_hero_banner_kepek',
                'title' => $value['title'],
                'page' => $value['category_page'],
                'img_url' => $value['kep']['url'],
                'text' => $value['szoveg'],
                'link_title' => $value['link_title'],
            ]);
        }
    }
}
