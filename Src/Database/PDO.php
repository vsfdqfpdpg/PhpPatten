<?php namespace Src\Database;

use Src\BaseInterface\DatabaseInterface;

class PDO implements DatabaseInterface
{
    protected $conn;
    public function connect($host, $user, $password, $dbname)
    {
        echo 'mysql:host='.$host.';dbname='.$dbname.';';
        $conn = new \PDO('mysql:host='.$host.';dbname='.$dbname.';',$user,$password);
        $this->conn = $conn;
    }
    public function query($sql)
    {
        return $this->conn->query($sql);
    }
    public function close()
    {
        unset($this->conn);
    }

}