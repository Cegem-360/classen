<?php

declare(strict_types=1);

namespace App\Console\Commands;

use App\Models\Category;
use App\Models\Door;
use Illuminate\Console\Command;
use Illuminate\Support\Str;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

final class GenerateSitemap extends Command
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
        $sitemap = Sitemap::create();
        $sitemap->add(Url::create('/ajtok')->setPriority(0.8)->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY));
        $sitemap->add(Url::create('/kollekciok')->setPriority(0.8)->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY));
        $sitemap->add(Url::create('/rolunk')->setPriority(0.8)->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY));
        $sitemap->add(Url::create('/kapcsolat')->setPriority(0.8)->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY));
        $sitemap->add(Url::create('/szolgaltatasaink')->setPriority(0.8)->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY));
        $sitemap->add(Url::create('/blog')->setPriority(0.8)->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY));
        $sitemap->add(Url::create('/kedvencek')->setPriority(0.8)->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY));
        $sitemap->add(Url::create('/letoltesek')->setPriority(0.8)->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY));
        $sitemap->add(Url::create('/kilincsek')->setPriority(0.8)->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY));
        $sitemap->add(Url::create('/fa-mintazatu-belteri-ajtok-festett-belteri-ajtok-modul-belteri-ajtok-technikai-belteri-ajtok')->setPriority(0.8)->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY));
        $sitemap->add(Url::create('/aszf')->setPriority(0.8)->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY));
        $sitemap->add(Url::create('/adatvedelmi-nyilatkozat')->setPriority(0.8)->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY));
        $sitemap->add(Url::create('/ajanlatkeres')->setPriority(0.8)->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY));
        $sitemap->add(Url::create('/')->setPriority(1.0)->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY));
        $sitemap->add(Url::create('/'.Str::slug(' Fa mintázatú ajtók - Természetes elegancia és stílus', '-', 'hu'))->setPriority(0.8)->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY));
        $sitemap->add(Url::create('/'.Str::slug('Modulajtók - Stílus, funkcionalitás és minőség', '-', 'hu'))->setPriority(0.8)->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY));
        $sitemap->add(Url::create('/'.Str::slug('Enteriőrbe illő bejárati ajtók - Stílus és biztonság', '-', 'hu'))->setPriority(0.8)->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY));
        $sitemap->add(Url::create('/kimelt-termekeink')->setPriority(0.9)->setChangeFrequency(Url::CHANGE_FREQUENCY_MONTHLY));
        $sitemap->add(Url::create('/raktari-ajtok–megbizhatosag-tartossag')->setPriority(0.8)->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY));
        $sitemap->add(Url::create('/raktari-ajtok-tokeletes-valasztas-otthonaba-es-munkahelyere')->setPriority(0.8)->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY));
        $sitemap->add(Category::all());
        $sitemap->add(Door::all());
        $sitemap->writeToFile(public_path('sitemap.xml'));
    }
}
