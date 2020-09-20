<?php
require "vendor/autoload.php";
$database = require "core/bootstrap.php";

use App\core\Router;
use App\core\Request;

$router = Router::load('route.php');
$router->direct(Request::uri(), Request::method());
// require "route.php";
// require $router->direct($uri);



