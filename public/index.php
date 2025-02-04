<?php

require_once "../vendor/autoload.php";

use Core\Router;


// $router->get('/users', 'UserController@index');
// $router->get('/users/create', 'UserController@create');
// $router->post('/users/create', 'UserController@create');
// $router->get('/users/edit/{id}', 'UserController@edit');
// $router->post('/users/edit/{id}', 'UserController@edit');
// $router->get('/users/delete/{id}', 'UserController@delete');
// $router->get('/users/{id}', 'UserController@show');


Router::post('/users/delete/{id}', 'UserController@delete');
Router::get('', 'UserController@index');



Router::dispatch($_SERVER['REQUEST_URI']);
