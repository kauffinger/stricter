<?php

namespace Kauffinger\Stricter;

use Kauffinger\Stricter\Commands\StricterCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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
