<?php namespace Src;

class View
{
    public static function __callStatic($name, $arguments)
    {
        if (method_exists('Src\View',$name)){
            $self = new self();
            $self->$name($arguments);
        }
    }

    private function load($arguments){
        $caller = debug_backtrace()[3];
        if ( $caller['object'] instanceof Controller){
            $request['request'] = $caller['args'][0];
            extract($request);
            foreach ($arguments as $key => $value){
                if (is_array($value)) extract($value);
            }
            $viewPath = str_replace('Controller','Template',$caller['class']).DS.$caller['function'].'.html';
            dd($viewPath);
            if(is_readable($viewPath)){
                require_once $viewPath;
            }else{
                throw new \Exception($viewPath. ' is not exist.');
            }
        }
    }

}