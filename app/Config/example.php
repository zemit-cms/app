<?php

return function () {
    return array(
        'debug' => true,
        'profiler' => true,
        'logger' => false,
        'application' => array(
            'baseUri' => '/'
        ),
        'database' => array(
            'host' => 'localhost',
            'dbname' => 'zemit',
            'username' => 'zemit',
            'password' => 'zemit',
        ),
    );
};
