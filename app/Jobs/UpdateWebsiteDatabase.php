<?php

declare(strict_types=1);

namespace App\Jobs;

use App\Enums\EndPoint;
use App\Enums\UrlPath;
use App\Models\WebsiteOptions;
use Artisan;
use GuzzleHttp\Client;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

final class UpdateWebsiteDatabase implements ShouldQueue
{
    use Dispatchable;
    use InteractsWithQueue;
    use Queueable;
    use SerializesModels;
    public Client $client;

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $this->client = new Client(
            [
                'base_uri' => UrlPath::BASEURL,
            ]
        );
        $response = $this->client->get(EndPoint::LARAVELWEBSITEOPTIONS);
        $result = json_decode($response->getBody()->getContents(), true);
        $result = $result[0]['acf'];
        Artisan::call('migrate:refresh', ['--path' => 'database/migrations/2024_02_28_123239_create_website_options_table']);
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
