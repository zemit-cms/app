<?php

/*
 +------------------------------------------------------------------------+
 | Zemit                                                                  |
 +------------------------------------------------------------------------+
 | Copyright (c) 2017-present Zemit Team and contributors                 |
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

/*
 * REQUIRED BOOSTRAP CONSTANTS
 * Or you can set those environment variables in your .htaccess
 *     SetEnv ROOT_PATH /
 *     SetEnv VENDOR_PATH vendor
 *     SetEnv APPLICATION_NAMESPACE Zemit
 *     SetEnv APPLICATION_PATH app
 * Or with nginx:
 *     fastcgi_param ROOT_PATH /;
 *     fastcgi_param VENDOR_PATH vendor;
 *     fastcgi_param APPLICATION_NAMESPACE Zemit;
 *     fastcgi_param APPLICATION_PATH app;
 * Or uncomment this part if you want to force those path manually
 */
//define('ROOT_PATH', dirname(__DIR__));
//define('VENDOR_PATH', 'vendor');
//define('APPLICATION_NAMESPACE', 'Zemit');
//define('APPLICATION_PATH', 'app');

// Get the root, vendor, app path and default app namespace (DO NOT TOUCH THIS PART)
defined('ROOT_PATH') || define('ROOT_PATH', (getenv('ROOT_PATH') ? getenv('ROOT_PATH') : dirname(__DIR__)));
defined('VENDOR_PATH') || define('VENDOR_PATH', (getenv('VENDOR_PATH') ? getenv('VENDOR_PATH') : 'vendor'));
defined('APPLICATION_NAMESPACE') || define('APPLICATION_NAMESPACE', (getenv('APPLICATION_NAMESPACE') ? getenv('APPLICATION_NAMESPACE') : 'Zemit'));
defined('APPLICATION_PATH') || define('APPLICATION_PATH', (getenv('APPLICATION_PATH') ? getenv('APPLICATION_PATH') : 'app'));

// Register Composer Autoloader
$composer = require_once ROOT_PATH . '/' . VENDOR_PATH . '/autoload.php';
$composer->addPsr4(APPLICATION_NAMESPACE . '\\', ROOT_PATH . '/' . APPLICATION_PATH . '/');

// Run Zemit CMS
$bootstrap = new Bootstrap();
$bootstrap->run();
