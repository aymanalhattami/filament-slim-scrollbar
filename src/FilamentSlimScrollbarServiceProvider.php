<?php

namespace Aymanalhattami\FilamentSlimScrollbar;

use Filament\Support\Assets\Css;
use Spatie\LaravelPackageTools\Package;
use Filament\Support\Facades\FilamentAsset;
use Spatie\LaravelPackageTools\PackageServiceProvider;


class FilamentSlimScrollbarServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-slim-scrollbar';

    public function configurePackage(Package $package): void
    {
        $package->name(static::$name)
            ->hasAssets();

            FilamentAsset::register(
                assets: [
                    Css::make(static::$name, __DIR__ . '/../resources/dist/app.css'),
                ],
                package: 'aymanalhattami/filament-slim-scrollbar'
            );
    }
}
