<?php namespace App\Controller;

use Src\Controller;
use Src\Database\Mysql;
use Src\Database\Mysqli;
use Src\Database\PDO;
use Src\View;
use Src\Request;

class Index extends Controller
{
    public function Show(Request $request){
        View::load(['message'=>'hello'],['code'=>1]);
    }

    public function Index(Request $request){
        dd('This is called from '.__METHOD__);
        //$db = new Mysql();
        $db = new Mysqli();
        //$db = new PDO();
        $db->connect('localhost','root','','imooc');
        $res = $db->query('show databases');
        var_dump($res);
    }
}