<?php

namespace App\Console\Commands;

use Illuminate\Console\GeneratorCommand;

class MakeActionCommand extends GeneratorCommand
{
    /**
     * The name of the console command.
     *
     * @var string
     */
    protected $name = 'make:action';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new Action';

    /**
     * The console command type;
     *
     * @var string
     */
    protected $type = 'Action';

    /**
     * Get stub
     *
     * @return void
     */
    protected function getStub()
    {
        return resource_path('/stubs/action.stub');
    }

    /**
     * Get default namespace
     *
     * @param string $rootNamespace
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace.'\Actions';
    }
}
