<?php

namespace Kauffinger\Stricter;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Kauffinger\Stricter\Commands\StricterCommand;

class StricterServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('stricter')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_stricter_table')
            ->hasCommand(StricterCommand::class);
    }
}
