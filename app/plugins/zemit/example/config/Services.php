<?php

namespace Zemit\Example;

class Services {
    
    public function __construct(FactoryDefault $di, Config $config = null)
    {
        $di->setShared('example', function () {
            return 'service-example';
        });
    }
}