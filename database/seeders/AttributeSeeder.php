<?php

namespace Database\Seeders;

use App\Enums\EndPoint;
use App\Enums\UrlPath;
use App\Models\Attribute;
use GuzzleHttp\Client;
use Illuminate\Database\Seeder;

class AttributeSeeder extends Seeder
{
    /**
     * Helper
     */
    public Client $client;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->client =
            new Client([
                'base_uri' => UrlPath::BASEURL,
                'timeout' => 120,
            ]);
        $response =
            $this->client->request('GET', EndPoint::DESIGFORMS.'?per_page=25', [['timeout' => 120]]);
        $designForms = json_decode($response->getBody(), true);
        foreach ($designForms as $designForm) {
            $imgUrl =
                $this->client->get($designForm['_links']['wp:attachment'][0]['href']);
            $imgUrl = json_decode($imgUrl->getBody());
            $imgUrl = collect($imgUrl)->first();
            Attribute::factory(1)->create([
                'name' => $designForm['title']['rendered'],
                'value' => $designForm['content']['rendered'],
                'img' => $imgUrl->source_url,
                'slug' => $designForm['slug'],
            ]);
        }
    }
}
