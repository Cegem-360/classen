<?php

namespace App\Jobs;

use App\Enums\EndPoint;
use App\Enums\UrlPath;
use App\Models\WebsiteOptions;
use GuzzleHttp\Client;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Artisan;

class UpdateWebsiteDatabase implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public Client $client;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {

    }

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
        $result = json_decode($response->getBody(), true);
        $result = $result[0]['acf'];
        Artisan::call('migrate:refresh', ['--table' => 'website_options']);
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
