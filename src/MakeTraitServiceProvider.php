<?php

/*
 * This file is part of the hogus/laravel-make-trait.
 *
 * (c) hogus <hogus2037@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled.
 */

namespace Hogus\LaravelMakeTrait;

use Illuminate\Support\ServiceProvider;

class MakeTraitServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind('command.make:trait', TraitCommand::class);

        $this->commands([
            'command.make:trait',
        ]);
    }
}
