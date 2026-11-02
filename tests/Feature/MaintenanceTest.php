<?php

declare(strict_types=1);

use App\Filament\Pages\Maintenance;
use App\Models\Blog;
use App\Models\User;
use Filament\Actions\Testing\TestAction;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Support\Facades\Artisan;
use Livewire\Livewire;

use function Pest\Laravel\actingAs;

it('does not expose the cache and sitemap routes publicly', function (string $uri): void {
    $this->get($uri)->assertNotFound();
})->with(['/clearCache', '/sitemap', '/updateWebsiteDatabase']);

it('requires login for the maintenance page', function (): void {
    $this->get(Maintenance::getUrl())->assertRedirect();
});

it('renders the maintenance page for a logged in user', function (): void {
    actingAs(User::factory()->create(['password' => bcrypt('password')]));

    Livewire::test(Maintenance::class)
        ->assertOk()
        ->assertActionExists('generateSitemap')
        ->assertActionExists('clearCache');
});

it('generates the sitemap from the maintenance page', function (): void {
    actingAs(User::factory()->create(['password' => bcrypt('password')]));
    Artisan::shouldReceive('call')->once()->with('sitemap:generate');

    Livewire::test(Maintenance::class)
        ->callAction(TestAction::make('generateSitemap'))
        ->assertNotified();
});

it('clears the cache from the maintenance page', function (): void {
    actingAs(User::factory()->create(['password' => bcrypt('password')]));
    Artisan::shouldReceive('call')->once()->with('optimize:clear');

    Livewire::test(Maintenance::class)
        ->callAction(TestAction::make('clearCache'))
        ->assertNotified();
});

it('schedules the nightly sitemap generation', function (): void {
    $events = collect(app(Schedule::class)->events())
        ->filter(fn ($event): bool => str_contains((string) $event->command, 'sitemap:generate'));

    expect($events)->toHaveCount(1)
        ->and($events->first()->expression)->toBe('0 3 * * *');
});

it('points robots.txt at the sitemap', function (): void {
    $this->get('/robots.txt')
        ->assertOk()
        ->assertHeader('Content-Type', 'text/plain; charset=utf-8')
        ->assertSee('Sitemap: '.url('sitemap.xml'), false);
});

it('lists blog posts in the sitemap', function (): void {
    $blog = Blog::factory()->create(['slug' => 'uj-bejegyzes']);

    expect($blog->toSitemapTag()->url)->toBe(route('blog.show', 'uj-bejegyzes'));
});
