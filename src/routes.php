<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@home');
$router->get('/formcontato', 'HomeController@formcontato');
$router->get('/loginrender', 'HomeController@loginrender');
$router->get('/registrorender', 'HomeController@registrorender');
$router->post('/logado', 'ClienteController@logado');
$router->get('/registro', 'ClienteController@registrado');