<?php

namespace App;

use App\Bootstrap\Config;
use App\Bootstrap\Router;
use App\Bootstrap\Services;

class Bootstrap extends \Zemit\Bootstrap
{
    public $config = Config::class;
    public $router = Router::class;
    public $service = Services::class;
}
