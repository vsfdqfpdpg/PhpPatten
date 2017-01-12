<?php namespace Src;

class Register
{
    protected static $objects;
    public static function set($alias, $object){
        self::$objects[$alias] = $object;
    }

    public static function get($alias){
        return self::$objects[$alias];
    }
    public static function del($alias){
        unset(self::$objects[$alias]);
    }
}