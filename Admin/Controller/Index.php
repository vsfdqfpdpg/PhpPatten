<?php namespace Admin\Controller;

use Src\Controller;
use Src\Request;
use Src\View;

class Index extends Controller
{
    public function Index(Request $request){
        dd($request);
        View::load(['message'=>'Hello backend']);
        echo 'This is called from backend Controller '.__METHOD__;
    }

    public function Show(){

    }
}