<?php
namespace App\core;

class Router{
    public $route = [
        'GET'=>[],
        'POST'=>[],
    ];


    public static function load($file){
        $router = new static;
        require $file;
        return $router;
    }

    // public function define($route){
    //     $this->route = $route;
    // }

    public function get($uri, $controller){
        $this->route['GET'][$uri]=$controller;
    }

    public function post($uri, $controller){
         $this->route['POST'][$uri]= $controller;
    }

    public function direct($uri,$requestMethod){


        if(array_key_exists($uri, $this->route[$requestMethod])){

           return $this->callAction(
            ...explode('@',$this->route[$requestMethod][$uri])
           );
        }

        throw new Exception('No route define for this URI');
    }


    public function callAction($controller, $action){

        $controller = "App\\Controllers\\{$controller}";
        
        $controller = new $controller;

        // die(var_dump($controller));
       
        // die(var_dump($controller, $action));
        if(!method_exists($controller, $action)){
            throw new Exception(
                "{$controller} does not respond to this {$action} action"
            );
            
        }

        return $controller->$action();
    }
}