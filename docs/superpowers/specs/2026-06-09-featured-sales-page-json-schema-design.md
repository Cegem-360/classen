# FeaturedSalesPage — egyedi JSON-LD schema mező

**Dátum:** 2026-06-09
**Státusz:** Jóváhagyott design

## Cél

A `FeaturedSalesPage` oldalakhoz az admin egyedi schema.org JSON-LD strukturált
adatot tudjon beállítani a Filament adminban, egy JSON módú code editorral. A
megadott JSON az oldal fejlécében `<script type="application/ld+json">` blokként
jelenik meg.

## Döntések (brainstorming alapján)

- A korábbi, automatikusan generált JSON-LD blokkot **kivesszük**; csak az
  adminban megadott egyedi JSON jelenik meg.
- **Egy** JSON dokumentum (egy CodeEditor, egy `<script>` blokk). Több schema egy
  `@graph` tömbben megadható egy dokumentumon belül.
- A mező **opcionális**; ha üres, semmilyen JSON-LD nem jelenik meg az oldalon.
  A meglévő oldalak addig JSON-LD nélkül maradnak, amíg az admin ki nem tölti.

## Komponensek

### 1. Adatbázis

Új migráció: `json_schema` oszlop a `featured_sales_pages` táblához.

- Típus: `longText`, `nullable`.
- A tartalmat **nyers JSON szövegként** tároljuk (nincs `array` cast), hogy a
  CodeEditor stringként kezelhesse és a formázás megmaradjon.

### 2. Model — `App\Models\FeaturedSalesPage`

- `'json_schema'` hozzáadása a `#[Fillable]` attribútum listához.
- Új metódus a biztonságos, blade-ből kiemelt kimenethez:

```php
public function renderedJsonLd(): ?string
{
    if (blank($this->json_schema)) {
        return null;
    }

    $decoded = json_decode($this->json_schema, true);

    return is_array($decoded)
        ? json_encode($decoded, JSON_HEX_TAG | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE)
        : null;
}
```

A `JSON_HEX_TAG` flag a `<`/`>` karaktereket `<`/`>`-re kódolja, így
megakadályozza a `</script>` kitörést — biztonsági best practice script tagbe
ágyazott JSON esetén. A decode→encode lépés egyúttal garantálja, hogy csak
érvényes JSON kerül ki.

### 3. Filament form — `FeaturedSalesPageResource`

A `seo_title` mező után:

```php
use Filament\Forms\Components\CodeEditor;
use Filament\Forms\Components\CodeEditor\Enums\Language;

CodeEditor::make('json_schema')
    ->label('Egyedi JSON-LD schema')
    ->language(Language::Json)
    ->rules(['nullable', 'json'])
    ->helperText('schema.org strukturált adat. Üresen hagyva nem jelenik meg JSON-LD.')
    ->columnSpanFull()
```

- Opcionális (nincs `required()`).
- A `json` validációs szabály frontend + backend érvényesítést ad; `nullable`
  miatt üresen is menthető.

### 4. Renderelés — `resources/views/livewire/featured-sales-areas-show.blade.php`

A jelenlegi automatikus `@graph` JSON-LD `<script>` blokkot (kb. 18–21. sortól)
**töröljük**, helyette:

```blade
@if ($jsonLd = $featuredSalesPage?->renderedJsonLd())
    <script type="application/ld+json">{!! $jsonLd !!}</script>
@endif
```

A többi meta tag (description, og:, twitter:) változatlan marad.

## Tesztelés (Pest feature tesztek)

- Valid JSON mentése a Filament `EditFeaturedSalesPage` / `CreateFeaturedSalesPage`
  formon át → `assertHasNoFormErrors`, DB-ben eltárolva.
- Invalid JSON → `assertHasFormErrors(['json_schema'])`.
- A publikus oldal kiírja a `<script type="application/ld+json">` blokkot a
  beállított adattal, ha van.
- Üres `json_schema` esetén **nem** jelenik meg `application/ld+json` script.
- `</script>` injektálás a JSON-ben semlegesítve jelenik meg (JSON_HEX_TAG →
  a nyers `</script>` nem fordul elő a kimenetben).
- A model `renderedJsonLd()` unit-szintű viselkedése: érvénytelen/üres → `null`.

## Nem-funkcionális elvárások

- A `composer test` minden gate-je zöld marad: 100% type-coverage (explicit
  típusok az új kódban), peck (új magyar helper szöveg szavai felvéve a
  `peck.json` ignore listába, ha kell), pint formázás, phpstan, rector.
- Nincs új függőség.

## Hatókörön kívül

- A projekt általános best-practice / modernizációs auditja — külön menetben
  készül a feature után.
