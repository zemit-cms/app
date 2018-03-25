<?php

namespace Zemit;

use Zemit\Bootstrap\Config;
use Zemit\Bootstrap\Router;
use Zemit\Bootstrap\Services;
use Zemit\Core\Bootstrap as CoreBootstrap;

class Bootstrap extends CoreBootstrap
{
    public $config = Config::class;
    public $router = Router::class;
    public $service = Services::class;
}
