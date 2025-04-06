<?php

namespace Kauffinger\Stricter;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Kauffinger\Stricter\Commands\MakeApplicationStricterCommand;
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
            ->hasCommand(MakeApplicationStricterCommand::class);
    }

    public function packageBooted(): void
    {
        $this->configureModels();
        $this->configureCommands();
        $this->configureUrl();
    }

    public function configureModels(): void
    {
        if (Config::boolean('stricter.models.should_be_strict')) {
            Model::shouldBeStrict($this->app->environment('local'));
        }

        if (Config::boolean('stricter.models.unguard')) {
            Model::unguard();
        }
    }

    public function configureCommands(): void
    {
        if (! Config::boolean('stricter.commands.prohibit_destructive_commands')) {
            return;
        }
        DB::prohibitDestructiveCommands($this->app->isProduction());
    }

    public function configureUrl(): void
    {
        if (! Config::boolean('stricter.url.force_https')) {
            return;
        }

        URL::forceScheme('https');
    }
}
