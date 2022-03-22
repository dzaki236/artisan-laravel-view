<?php 
namespace Dzaki236\ArtisanLaravelView\commands;

use Dzaki236\ArtisanLaravelView\config\Module;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
class MakeViewCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:view {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new blade template';

    /**
    * The module extends to config
    *
    * @Module
    */
    protected $module;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->module = new Module();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    
    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $view = $this->argument('name');

        $path = $this->module->viewPath($view);

        $this->module->createDir($path);

        if (File::exists($path))
        {
            $this->error("File {$path} already exists!.");
            return;
        }

        File::put($path, $path);

        $this->info("File {$path} created!.");
    }

     
}
