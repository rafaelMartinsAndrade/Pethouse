<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@home');
$router->get('/formcontato', 'HomeController@formcontato');