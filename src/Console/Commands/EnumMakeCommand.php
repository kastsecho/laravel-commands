<?php

namespace Kastsecho\LaravelCommands\Console\Commands;

use Illuminate\Console\GeneratorCommand;
use Symfony\Component\Console\Input\InputOption;

class EnumMakeCommand extends GeneratorCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'make:enum';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new enum class';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Enum';

    /**
     * Get the stub file for the generator.
     */
    protected function getStub(): string
    {
        $stub = null;

        if ($type = $this->option('type')) {
            $stub = "/stubs/enum.{$type}.stub";
        } elseif ($this->option('int')) {
            $stub = '/stubs/enum.int.stub';
        } elseif ($this->option('string')) {
            $stub = '/stubs/enum.string.stub';
        }

        $stub ??= '/stubs/enum.stub';

        return cwd_path("../$stub");
    }

    /**
     * Get the default namespace for the class.
     */
    protected function getDefaultNamespace($rootNamespace): string
    {
        return "{$rootNamespace}\\Enums";
    }

    /**
     * Get the console command options.
     */
    protected function getOptions(): array
    {
        return [
            ['type', null, InputOption::VALUE_REQUIRED, 'Manually specify the enum stub file to use'],
            ['force', null, InputOption::VALUE_NONE, 'Create the class even if the enum already exists'],
            ['int', 'i', InputOption::VALUE_NONE, 'Generate a backed integer enum class'],
            ['string', 's', InputOption::VALUE_NONE, 'Generate a backed string enum class'],
        ];
    }
}
