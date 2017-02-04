<?php namespace Src;

class Bootstrap
{
    public static function run(){
        $request = new Request();
        Register::set('request',$request);
        $class = $request->getPath().'\Controller\\'.$request->getMethod();
        $action = $request->getAction();
        $classFile = str_replace('\\',DS,$class.'.php');
        if(is_readable($classFile)){
            require_once $classFile;
            $obj = new $class();
            if (method_exists($obj,$action)){
                $obj->{$action}($request);
            }else{
                throw new \Exception('Method '.$action.' is not exist in '. $class);
            }
        }else{
            throw new \Exception('Controller '.$class.' is not exist.');
        }
    }
}