<?php

namespace Kastsecho\LaravelCommands\Console\Commands;

use Illuminate\Console\GeneratorCommand;
use Symfony\Component\Console\Input\InputOption;

class TraitMakeCommand extends GeneratorCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'make:trait';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new trait class';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Trait';

    /**
     * Get the default namespace for the class.
     */
    protected function getDefaultNamespace($rootNamespace): string
    {
        return "{$rootNamespace}\\Traits";
    }

    /**
     * Get the stub file for the generator.
     */
    protected function getStub(): string
    {
        return cwd_path('../stubs/trait.stub');
    }

    /**
     * Get the console command options.
     */
    protected function getOptions(): array
    {
        return [
            ['force', null, InputOption::VALUE_NONE, 'Create the class even if the action already exists'],
        ];
    }
}
