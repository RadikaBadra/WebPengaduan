<?php
Class App{
    protected $controller = 'Login';
    protected $method = 'index';
    protected $param = [];

    public function __construct(){
        $url = $this->parseurl();
        
        if(file_exists('../App/Controller/'.$url[0].'.php')){
            $this->controller = $url[0];
            unset($url[0]);
        }
        require_once '../App/Controller/'.$this->controller.'.php';
        $this->controller = new $this->controller;

        if(isset($url[1])){
            if(method_exists($this->controller,$url[1])){
                $this->method = $url[1];
                unset($url[1]);
            }
        }
        if(!empty($url)){
            $this->param = array_values($url);
        }
        call_user_func_array([$this->controller,$this->method],$this->param);
    }
    public function parseurl(){
        if(isset($_GET['url'])){
            $url = rtrim($_GET['url'],'/');
            $url = filter_var($url,FILTER_SANITIZE_URL);
            $url = explode('/',$url);
            return $url;
        }
    }
}
?>