<?php
    class App{

        protected $controller = 'homeController';
        protected $method = 'index';
        protected $params = [];

        public function __construct(){
            $url = $this->parseURL();
            if(file_exists('../App/Controller/' . $url[0] . 'Controller.php')){
                $this->controller = $url[0] . 'Controller';
                unset($url[0]);
            }

            require_once '../App/Controller/' . $this->controller . '.php';
            $this->controller = new $this->controller;

            if(isset($url[1])){
                if(method_exists($this->controller, $url[1])){
                    $this->method = $url[1];
                    unset($url[1]);
                }
            }

            $this->params = $url ? array_values($url) : [];

            call_user_func_array([$this->controller, $this->method], $this->params);   
        }

        public function parseURL(){
            if(isset($_GET['url'])){
                return $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
            }
        }
    }
?>