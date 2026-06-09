<?php

declare(strict_types=1);

use App\Filament\Resources\FeaturedSalesPages\Pages\EditFeaturedSalesPage;
use App\Models\FeaturedSalesPage;
use App\Models\User;
use Livewire\Livewire;

use function Pest\Laravel\actingAs;
use function Pest\Laravel\assertDatabaseHas;

it('saves valid json schema via the filament edit form', function (): void {
    actingAs(User::factory()->create(['password' => bcrypt('password')]));

    $page = FeaturedSalesPage::factory()->create(['json_schema' => null]);

    $json = '{"@context":"https://schema.org","@type":"Organization","name":"Arcadia 98"}';

    Livewire::test(EditFeaturedSalesPage::class, ['record' => $page->id])
        ->fillForm(['json_schema' => $json])
        ->call('save')
        ->assertHasNoFormErrors();

    assertDatabaseHas(FeaturedSalesPage::class, [
        'id' => $page->id,
        'json_schema' => $json,
    ]);
});

it('rejects invalid json schema via the filament edit form', function (): void {
    actingAs(User::factory()->create(['password' => bcrypt('password')]));

    $page = FeaturedSalesPage::factory()->create(['json_schema' => null]);

    Livewire::test(EditFeaturedSalesPage::class, ['record' => $page->id])
        ->fillForm(['json_schema' => '{invalid json'])
        ->call('save')
        ->assertHasFormErrors(['json_schema']);
});

it('renders the json-ld script block on the public page when json_schema is set', function (): void {
    $json = '{"@context":"https://schema.org","@type":"Organization","name":"Arcadia 98 Kft."}';

    $page = FeaturedSalesPage::factory()->create(['json_schema' => $json]);

    $response = $this->get(route('featured-sales-areas.show', ['slug' => $page->slug]));

    $response->assertOk();
    $response->assertSee('application/ld+json', false);
    $response->assertSee('Arcadia 98 Kft.', false);
});

it('does not render a json-ld script block when json_schema is empty', function (): void {
    $page = FeaturedSalesPage::factory()->create(['json_schema' => null]);

    $response = $this->get(route('featured-sales-areas.show', ['slug' => $page->slug]));

    $response->assertOk();
    $response->assertDontSee('application/ld+json', false);
});

it('escapes a closing script tag embedded in the json schema', function (): void {
    $json = '{"@context":"https://schema.org","@type":"Organization","name":"</script><script>alert(1)</script>"}';

    $page = FeaturedSalesPage::factory()->create(['json_schema' => $json]);

    $response = $this->get(route('featured-sales-areas.show', ['slug' => $page->slug]));

    $response->assertOk();
    $response->assertSee('application/ld+json', false);

    // The dangerous raw sequence from the JSON value must never reach the output.
    expect($response->getContent())->not->toContain('<script>alert(1)</script>');
    // JSON_HEX_TAG encodes the angle brackets instead.
    $response->assertSee('</script>', false);
});

it('returns null from renderedJsonLd when json_schema is blank', function (): void {
    $page = FeaturedSalesPage::factory()->make(['json_schema' => null]);

    expect($page->renderedJsonLd())->toBeNull();
});

it('returns null from renderedJsonLd when json_schema is invalid json', function (): void {
    $page = FeaturedSalesPage::factory()->make(['json_schema' => '{invalid json']);

    expect($page->renderedJsonLd())->toBeNull();
});

it('returns null from renderedJsonLd when json_schema decodes to a scalar', function (): void {
    $page = FeaturedSalesPage::factory()->make(['json_schema' => '"just a string"']);

    expect($page->renderedJsonLd())->toBeNull();
});
