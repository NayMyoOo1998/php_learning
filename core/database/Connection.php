<?php
class Connection {

    public static function make($config){
        try{
            // return new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root', '');
            return new PDO(
                $config['host'].";dbname=". $config['dbname'],
                $config['username'],
                $config['password'],
                $config['options'],
            );
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }
}

// Connection::make();