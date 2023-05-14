<?php

namespace Kastsecho\LaravelCommands;

use Illuminate\Support\ServiceProvider;
use Kastsecho\LaravelCommands\Console\Commands;

class LaravelCommandServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->commands([
            Commands\ActionMakeCommand::class,
            Commands\EnumMakeCommand::class,
            Commands\TraitMakeCommand::class,
        ]);
    }
}
