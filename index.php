<?php
define('APP_FRONTEND','App');
define('APP_BACKEND','Admin');
define('DS',DIRECTORY_SEPARATOR);
// require_once APP_BASE.DS.'Src'.DS.'Loader.php';
// spl_autoload_register('Src\Loader::autoload');

require_once 'vendor'.DS.'autoload.php';

\Src\Bootstrap::run();


