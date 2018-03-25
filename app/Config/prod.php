<?php

return function () {
    return array(
        'debug' => false,
        'profiler' => false,
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
