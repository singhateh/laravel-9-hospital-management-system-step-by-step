<?php

namespace App\Console\Commands;

use Illuminate\Support\Str;
use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\Route;

class LivewireTableCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:livewire:table
    {componentClass? : The name of the component class.},
    {modelClass? : The name of the model class.}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creating Livewire table component';


    /**
     * The table class properties.
     *
     */
    protected $componentClass;
    protected $modelClass;
    protected $file;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->file = new Filesystem();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        //Get All provided Parameters
        $this->getParameters();

        //Generate Component Class File
        $this->generateLivewireClassComponentFile();

        //Generate Component View File With Table
        $this->generateLivewireViewFile();

        // Generate Index Blade File
        $this->generateBladeViewFile();

        $this->creatingRoute();
    }


    public function getParameters()
    {
        $this->componentClass = $this->argument('componentClass');
        $this->modelClass = $this->argument('modelClass');

        if (!$this->componentClass) {
            $this->componentClass = $this->ask('Enter Component Name :');
        }

        if (!$this->modelClass) {
            $this->modelClass = $this->ask('Enter Model Name :');
        }


        // Convert String ClassNames to Study
        $this->componentClass = !Str::of($this->componentClass)->contains(['table', 'Table']) ? Str::studly($this->componentClass . 'Table') : Str::studly($this->componentClass);
        $this->modelClass = Str::studly($this->modelClass);
    }

    public function generateLivewireClassComponentFile()
    {

        $fileOriginPath = base_path('/stubs/livewire.table.component.stub');
        $fileDestinationPath = base_path('/app/Http/Livewire/' . $this->componentClass . '.php');


        // Check if the Component Class is exist
        if ($this->file->exists($fileDestinationPath)) {
            // $this->shouldOverwriteConfig($fileDestinationPath);
            $this->error("File {$fileDestinationPath} already exists!");
        }


        // Get the original content of the file
        $fileOriginalContent = $this->file->get($fileOriginPath);
        $replaceFileOriginalContent = Str::replaceArray(
            '{{}}',
            [
                $this->modelClass,
                $this->componentClass,
                $this->modelClass . '()',
                $this->modelClass,
                $this->modelClass,
                Str::kebab($this->componentClass),
                Str::plural(Str::lower($this->modelClass))
            ],
            $fileOriginalContent
        );

        // Put the original file content into the destination file
        $this->file->put($fileDestinationPath, $replaceFileOriginalContent);
        $this->info("File {$fileDestinationPath} created successfully!");
    }

    public function generateLivewireViewFile()
    {
        if ($this->modelClass == 'User') {
            $fileOriginPath = base_path('/stubs/livewire.table.users.view.stub');
        } else {
            $fileOriginPath = base_path('/stubs/livewire.table.view.stub');
        }
        $fileDestinationPath = base_path('/resources/views/Livewire/' . Str::kebab($this->componentClass) . '.blade.php');


        // Check if the view File is exist
        if ($this->file->exists($fileDestinationPath)) {
            // $this->shouldOverwriteConfig($fileDestinationPath);
            $this->error("File {$fileDestinationPath} already exists!");
        }

        // Get the original content of the file
        $fileOriginalContent = $this->file->get($fileOriginPath);
        $replaceFileOriginalContent = Str::replaceArray(
            '{{}}',
            [
                Str::plural('$' . Str::lower($this->modelClass)),
                Str::plural('$' . Str::lower($this->modelClass)),
                Str::lower('$' . $this->modelClass),
                Str::lower('$' . $this->modelClass),
                Str::plural('$' . Str::lower($this->modelClass)),
                Str::plural('$' . Str::lower($this->modelClass)),

            ],
            $fileOriginalContent
        );

        // Put the original file content into the destination file
        $this->file->put($fileDestinationPath, $replaceFileOriginalContent);
        $this->info("File {$fileDestinationPath} created successfully!");
    }

    public function generateBladeViewFile()
    {

        $fileOriginPath = base_path('/stubs/livewire.table.blade.view.stub');
        $fileDestinationPath =  $this->viewBladePath('index');
        $this->createDirectory($fileDestinationPath);


        // Check if the blade view File is exist
        if ($this->file->exists($fileDestinationPath)) {
            $this->error("File {$fileDestinationPath} already exists!");
            return;
        }

        // Get the original content of the file
        $fileOriginalContent = $this->file->get($fileOriginPath);
        $replaceFileOriginalContent = Str::replaceArray(
            '{{}}',
            [
                Str::kebab($this->componentClass)
            ],
            $fileOriginalContent
        );

        // Put the original file content into the destination file
        $this->file->put($fileDestinationPath, $replaceFileOriginalContent);
        $this->info("File {$fileDestinationPath} created successfully!");
    }

    public function viewBladePath($view)
    {
        $view = str_replace('.', '/', $view) . '.blade.php';
        $fileDestinationPath = base_path("/resources/views/backend/admin/" . Str::kebab(Str::plural($this->modelClass)) . "/" . $view);
        return $fileDestinationPath;
    }

    public function createDirectory($path)
    {
        $directory = dirname($path);

        if (!file_exists($directory)) {

            mkdir($directory, 0777, true);
        }
    }

    private function shouldOverwriteConfig($file)
    {
        return $this->confirm(
            $file . ' file already exists. Do you want to overwrite it?',
            false
        );
    }


    public function creatingRoute()
    {

        $fileOriginPath = base_path('/stubs/livewire.table.routes.stub');
        $fileDestinationPath = base_path('routes/web.php');


        // Get the original content of the file
        $fileOriginalContent = $this->file->get($fileOriginPath);
        $replaceFileOriginalContent = Str::replaceArray(
            '{{}}',
            [
                Str::plural(Str::lower($this->modelClass)),
                "backend.admin." . Str::kebab(Str::plural($this->modelClass)).".index",
                $this->routeName(),
            ],
            $fileOriginalContent
        );

        // Check if the route is exist
        if ($this->checkRoute($this->routeName())) {
           return $this->error("Route {$this->routeName()} already exists!");
        }

        // Put the original file content into the destination file
       if ($this->checkRoutePrefix('admin')) {
            $this->file->append($fileDestinationPath, $replaceFileOriginalContent);
       }else {
         $this->file->append($fileDestinationPath, $replaceFileOriginalContent);
       }
        $this->info("Route {$this->routeName()} created successfully!");

    }

    protected function routeName(){
       return Str::plural(Str::lower($this->modelClass)) .'.index';
    }

    function checkRoute($route) {
        $routes = Route::getRoutes();
        foreach($routes as $r){
            if($r->getName() == $route){
                return true;
            }
        }

        return false;
    }

    function checkRoutePrefix($routePrefix) {
        $routes = Route::getRoutes();
        foreach($routes as $r){
            if($r->getPrefix() == $routePrefix){
                return true;
            }
        }

        return false;
    }

}
