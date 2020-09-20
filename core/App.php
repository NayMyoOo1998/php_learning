<?php

namespace App\core;

class App{
    protected static $registry = [];
    public static function bind($key, $val){
        static::$registry[$key] = $val;
    }

    public static function get($key){

        if(!array_key_exists($key, static::$registry)){
            throw new Exception("No {$key} bound in this container", 1);
            
        }


       return static::$registry[$key];
    }
}