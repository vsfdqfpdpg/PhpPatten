<?php namespace Src;

class Register
{
    protected static $objects;
    private function __construct(){}
    private function __clone(){}
    public static function set($alias, $object){
        self::$objects[$alias] = $object;
    }

    public static function get($alias){
        return isset(self::$objects[$alias]) ?  self::$objects[$alias] : false;
    }

    public static function del($alias){
        unset(self::$objects[$alias]);
    }
}