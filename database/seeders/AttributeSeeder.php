<?php

namespace Database\Seeders;


use App\Enums\UrlPath;
use GuzzleHttp\Client;
use App\Enums\EndPoint;
use App\Models\Attribute;
use Illuminate\Database\Seeder;

class AttributeSeeder extends Seeder
{
    /**
     * Helper
     * @var \GuzzleHttp\Client $client
     *
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
            ]);
        $response =
            $this->client->get(EndPoint::DESIGFORMS."?per_page=25");
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
