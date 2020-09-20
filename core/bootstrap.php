<?php
// $app = [];
use App\core\App;


// require "core/database/Connection.php";
// require "core/database/QueryBilder.php";
// require "core/Request.php";
// require "core/Router.php";

App::bind('config', require "config.php");
// $app['config'] = require "config.php";

App::bind('database', new QueryBilder(
    Connection::make(App::get('config')['database'])
)

);

// $app['database'] = new QueryBilder(
//     Connection::make($app['config']['database'])
// );


function view($name,$data=[]){
    extract($data);
    return require "app/views/{$name}.view.php";
}

function redirect($path){
   header("location:/$path");
}