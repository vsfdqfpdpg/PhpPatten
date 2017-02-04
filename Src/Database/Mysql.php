<?php namespace Src\Database;

use Src\BaseInterface\DatabaseInterface;

class Mysql implements DatabaseInterface
{
    protected $conn;
    public function connect($host, $user, $password, $dbname)
    {
        $conn = mysql_connect($host,$user,$password);
        mysql_select_db($dbname,$conn);
        $this->conn = $conn;
    }
    public function query($sql)
    {
        return mysql_query($sql,$this->conn);
    }
    public function close()
    {
        mysql_close($this->conn);
    }

}