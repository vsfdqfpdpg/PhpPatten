<?php
namespace Src;
class Loader{
    public static function autoload($class){
        require_once APP_BASE.DS.str_replace('\\',DS,$class).'.php';
    }
}
