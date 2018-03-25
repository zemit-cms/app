<?php

namespace Zemit\Bootstrap;

use Zemit\Core\Bootstrap\Config as CoreConfig;
use Phalcon\Config as PhalconConfig;

class Config extends CoreConfig
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
