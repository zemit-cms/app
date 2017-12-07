<?php

/*
 +------------------------------------------------------------------------+
 | Zemit                                                                  |
 +------------------------------------------------------------------------+
 | Copyright (c) 2013-present Zemit Team and contributors               |
 +------------------------------------------------------------------------+
 | This source file is subject to the New BSD License that is bundled     |
 | with this package in the file LICENSE.txt.                             |
 |                                                                        |
 | If you did not receive a copy of the license and are unable to         |
 | obtain it through the world-wide-web, please send an email             |
 | to contact@zemit.com so we can send you a copy immediately.            |
 +------------------------------------------------------------------------+
*/

use Zemit\Bootstrap;

require_once __DIR__ . '/../../bootstrap/autoloader.php';

// Create the Application
$bootstrap = new Bootstrap(env('APP_MODE', 'normal'));

// Run the Application
return $bootstrap->getApplication();
