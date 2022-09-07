<?php

namespace SebastiaanKloos\LaravelSatellite;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelSatelliteServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-satellite')
            ->hasConfigFile()
            ->hasRoute('api');
    }
}
