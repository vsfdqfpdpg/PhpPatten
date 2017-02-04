<?php namespace Src\Database;

use Src\BaseInterface\DatabaseInterface;

class Mysqli implements DatabaseInterface
{
    protected $conn;
    public function connect($host, $user, $password, $dbname)
    {
        $conn = mysqli_connect($host,$user,$password,$dbname);
        $this->conn = $conn;
    }
    public function query($sql)
    {
        return mysqli_query($this->conn,$sql);
    }
    public function close()
    {
        mysqli_close($this->conn);
    }

}