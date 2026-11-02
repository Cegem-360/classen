<?php

declare(strict_types=1);

namespace App\Providers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;
use Livewire\Blaze\Blaze;

final class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void {}

    public function boot(): void
    {
        Model::automaticallyEagerLoadRelationships();

        Blaze::optimize()
            ->in(resource_path('views/components'))
            ->in(resource_path('views/components/svg'), memo: true)
            ->in(resource_path('views/components/icons'), memo: true)
            ->in(resource_path('views/components/layouts/app.blade.php'), compile: false);
    }
}
