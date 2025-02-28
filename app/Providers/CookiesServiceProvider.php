<?php

declare(strict_types=1);

namespace App\Providers;

use Whitecube\LaravelCookieConsent\Consent;
use Whitecube\LaravelCookieConsent\CookiesServiceProvider as ServiceProvider;
use Whitecube\LaravelCookieConsent\Facades\Cookies;

final class CookiesServiceProvider extends ServiceProvider
{
    /**
     * Define the cookies users should be aware of.
     */
    protected function registerCookies(): void
    {
        // Register Laravel's base cookies under the "required" cookies section:
        Cookies::essentials()
            ->session()
            ->csrf();

        // Register all Analytics cookies at once using one single shorthand method:
        Cookies::analytics()
            ->google(config('cookieconsent.google_analytics_id'));

        // Register custom cookies under the pre-existing "optional" category:
        Cookies::optional()
            ->name('darkmode_enabled')
            ->description(__('This cookie helps us remember your preferences regarding the interface\'s brightness.'))
            ->duration(120);
        // ->accepted(fn (Consent $consent, MyDarkmode $darkmode) => $consent->cookie(value: $darkmode->getDefaultValue()));
    }
}
