<?php

require_once "../vendor/autoload.php";

use Core\Router;

Router::get('', 'HomeController@index');
Router::dispatch($_SERVER['REQUEST_URI']);
