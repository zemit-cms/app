<?php

namespace App\Bootstrap;

use Phalcon\Config as PhalconConfig;

class Config extends \Zemit\Bootstrap\Config
{
    public function __construct($config = array())
    {
        parent::__construct(array(
            'modules' => array(
                'frontend' => [
                    'className' => APP_NAMESPACE . '\\Frontend\\Module',
                    'path' => APP_PATH . '/Modules/Frontend/Module.php'
                ],
            ),
        ));
        if (!empty($config)) {
            $this->merge(new PhalconConfig($config));
        }
    }
}
