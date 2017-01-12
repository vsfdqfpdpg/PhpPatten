<?php
namespace Src;
class Database{
    private static $conn = null;
    private function __construct(){}
    private function __clone(){}

    public static function getInstance(){
        if (is_null(self::$conn)){
            self::$conn = new self();
        }
        return self::$conn;
    }
}