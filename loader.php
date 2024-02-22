<?php

use Phalcon\Autoload\Loader;

const APP_NAMESPACE = 'App';
const ROOT_PATH = __DIR__;
const VENDOR_PATH = ROOT_PATH . '/vendor';
const APP_PATH = ROOT_PATH . '/app';

$loader = new Loader();
$loader->setFiles([VENDOR_PATH . '/autoload.php']);
$loader->setNamespaces([APP_NAMESPACE => APP_PATH]);
$loader->setFileCheckingCallback(null);
$loader->register();

return $loader;
