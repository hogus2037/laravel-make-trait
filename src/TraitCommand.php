<?php

/*
 * This file is part of the hogus/laravel-make-trait.
 *
 * (c) hogus <hogus2037@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled.
 */

namespace Hogus\LaravelMakeTrait;

use Illuminate\Console\GeneratorCommand;

class TraitCommand extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $name = 'make:trait';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new model trait';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Trait';

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return __DIR__.'/stubs/trait.stub';
    }

    /**
     * Get the default namespace for the class.
     *
     * @param string $rootNamespace
     *
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace.'\Models\Traits';
    }
}
