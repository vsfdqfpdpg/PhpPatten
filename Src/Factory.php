<?php namespace Src;

class Factory
{
    public static function createDb(){
        $db = Database::getInstance();
        Register::set('db',$db);
        return $db;
    }

}