<?php

namespace App\Console\Commands;

use Spatie\Sitemap\Tags\Url;
use Illuminate\Console\Command;
use Spatie\Sitemap\SitemapGenerator;
use Illuminate\Support\Facades\Http;
class GenerateSitemap extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate the sitemap.';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        // modify this to your own needs
        SitemapGenerator::create(config('app.url'))->getSitemap()->add(Url::create('/')->setPriority(1.0))
            ->writeToFile(public_path('sitemap.xml'));


//dd(Http::get(config('app.url'))->status());
    }
}
