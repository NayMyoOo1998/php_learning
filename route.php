<?php
// $routes = [
//     '' => 'controller/index.php',
//     'about' => 'controller/about.php',
//     'contact' => 'controller/contact.php',
// ];

// $router->define([
//     '' => 'controller/index.php',
//     'about' => 'controller/about.php',
//     'contact' => 'controller/contact.php',
//     'add-todos' => 'controller/add-todos.php',
//     ]);

// use App\core\Controller\PageController;

use App\Controllers\PageController;

$router->get('','PageController@index');
$router->get('about','PageController@about');
$router->get('contact','PageController@contact');
$router->post('add-todos', 'PageController@addTodos');