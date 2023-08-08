<?php

namespace Aymanalhattami\FilamentSlimScrollbar;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;


class FilamentSlimScrollbarServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-slim-scrollbar';

    protected array $styles = [
        'filament-slim-scrollbar' => __DIR__ . '/../resources/dist/filament-slim-scrollbar.css',
    ];

    public function configurePackage(Package $package): void
    {
        $package->name(static::$name)
            ->hasAssets();
    }
}
