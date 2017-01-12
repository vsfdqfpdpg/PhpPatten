<?php
// define('APP_BASE',__DIR__);
define('DS',DIRECTORY_SEPARATOR);
// require_once APP_BASE.DS.'Src'.DS.'Loader.php';
// spl_autoload_register('Src\Loader::autoload');

require_once 'vendor'.DS.'autoload.php';
\Src\Bootstrap::run();

