<?php

namespace App\Bootstrap;

use Zemit\Utils\Env;

/**
 * Class Config
 * @package App\Bootstrap
 */
class Config extends \Zemit\Bootstrap\Config
{
    public function __construct($config = [])
    {
        parent::__construct([
            'modules' => [
                'cli' => [
                    'className' => APP_NAMESPACE . '\\Modules\\Cli\\Module',
                    'path' => APP_PATH . '/Modules/Cli/Module.php',
                ],
                'api' => [
                    'className' => APP_NAMESPACE . '\\Modules\\Api\\Module',
                    'path' => APP_PATH . '/Modules/Api/Module.php',
                ],
                'admin' => [
                    'className' => APP_NAMESPACE . '\\Modules\\Admin\\Module',
                    'path' => APP_PATH . '/Modules/Admin/Module.php',
                ],
                'app' => [
                    'className' => APP_NAMESPACE . '\\Modules\\App\\Module',
                    'path' => APP_PATH . '/Modules/App/Module.php',
                ],
            ],
            'router' => [
                'defaults' => [
                    'namespace' => Env::get('ROUTER_DEFAULT_NAMESPACE', 'App\\Modules\\App\\Controllers'),
                    'module' => Env::get('ROUTER_DEFAULT_MODULE', 'app'),
                ],
            ],
            'bootstrap' => [
                'config' => Config::class,
                'router' => Router::class,
                'service' => Services::class,
            ],
        ]);
        unset($this->modules->frontend);
        unset($this->modules->backend);
        unset($this->modules->console);
        if (!empty($config)) {
            $this->merge(new \Phalcon\Config($config));
        }
    }
}
