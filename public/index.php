<?php

use Phalcon\Mvc\Application;
use Phalcon\DI\FactoryDefault;
use Zemit\Config\App;
use Zemit\Config\Config;
use Zemit\Config\Modules;
use Zemit\Config\Router;
//use Zemit\Config\Loader;
use Zemit\Config\Services;

// Command line xDebug necessity
if (php_sapi_name() === 'cli-server')
{
	$_GET['_url'] = $_SERVER['REQUEST_URI'];
}

class Bootstrap
{
    public $di;
    public $app;
    public $config;
    public $loader;
    public $application;
    public $services;
    public $modules;
    
    public function __construct()
    {
        // Enable error reporting and display
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
        $appPath = realpath('../app');
        $appPath = empty($appPath) ? __DIR__ . '/../' : $appPath . '/';
        $configPath = $appPath . 'config/';
        
        require_once $configPath . 'App.php';
        require_once $configPath . 'Config.php';
        require_once $configPath . 'Modules.php';
        require_once $configPath . 'Router.php';
        require_once $configPath . 'Services.php';
        
        $this->di = new FactoryDefault();
        $this->app = new App();
        $this->config = new Config();
        $this->loader = new Phalcon\Loader();
        $this->config->mergeEnvConfig();
        $this->loader->registerFiles([
            $this->config->application->vendorDir . 'autoload.php'
        ]);
        $this->loader->register();
        $this->di->setShared('loader', $this->loader);
        $this->services = new Services($this->di, $this->config);
        $this->application = new Application($this->di);
        $this->modules = new Modules($this->application);
        $this->router = new Router(true, $this->application);
        $this->di['router'] = $this->router;
    }
    
    public function run() {
        if (isset($this->application)) {
            echo $this->application->handle()->getContent();
        }
        else {
            throw new \Exception('Application not found', 404);
        }
    }
}

$bootstrap = new Bootstrap();
$bootstrap->run();