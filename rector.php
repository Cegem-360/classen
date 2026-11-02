<?php

declare(strict_types=1);

use Madbox99\RectorFilament\Set\FilamentSetList;
use Rector\Config\RectorConfig;
use Rector\Privatization\Rector\ClassMethod\PrivatizeFinalClassMethodRector;

return RectorConfig::configure()
    ->withPaths([
        __DIR__.'/app',
        __DIR__.'/bootstrap/app.php',
        __DIR__.'/database',
        __DIR__.'/public',
    ])
    ->withSkip([
        PrivatizeFinalClassMethodRector::class => [__DIR__.'/app/Filament', __DIR__.'/app/Livewire'],
    ])
    ->withComposerBased()
    ->withImportNames()
    ->withPhpSets()
    ->withParallel()
    ->withSets([
        FilamentSetList::LARAVEL_APP,
    ])
    ->withPreparedSets(
        deadCode: true,
        codeQuality: true,
        codingStyle: true,
        typeDeclarations: true,
        privatization: true,
    );
