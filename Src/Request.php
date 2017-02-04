<?php namespace Src;

class Request
{
    protected $_method;
    protected $_action;
    protected $_args=[];
    protected $_path;
    public function __construct(){
        if (isset($_SERVER['PATH_INFO'])){
            $pathInfo = array_filter(explode('/',$_SERVER['PATH_INFO']));
        }else{
            $pathInfo = [] ;
        }
        $this->_method = ($temp = array_shift($pathInfo)) ? ucfirst($temp) : 'Index';
        if ($this->_method == APP_BACKEND) {
            $this->_path = APP_BACKEND;
            $this->_method = ($temp = array_shift($pathInfo)) ? ucfirst($temp) : 'Index';
        }else{
            $this->_path = APP_FRONTEND;
        }
        $this->_action = ($temp = array_shift($pathInfo)) ? ucfirst($temp) : 'Index';
        $this->_args   = isset($pathInfo[0]) ? $pathInfo : [] ;
    }

    public function __call($name, $arguments)
    {
        switch (substr($name,0,3)){
            case 'get' :
                return $this->handlerProperty($name);
                break;
            case 'set' :
                return $this->handlerProperty($name,$arguments);
                break;
            default :
                throw new \Exception($name. ' is not defined in ' .__CLASS__);
                break;
        }
    }

    private function handlerProperty($name, $arguments = null){
        $property = '_' . strtolower(substr($name,3));
        if ( ! is_null($arguments)) $this->$property = ucfirst($arguments[0]);
        if(property_exists($this,$property)){
            return $this->{$property};
        }else{
            throw new \Exception($property. ' is not exist in class ' .__CLASS__);
        }
    }
}