<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@home');
$router->get('/formcontato', 'HomeController@formcontato');
$router->get('/loginrender', 'HomeController@loginrender');
$router->get('/registrorender', 'HomeController@registrousuariorender');
$router->post('/registropetrender', 'ClienteController@registropetrender');
$router->post('/login', 'ClienteController@logado');
$router->get('/registro', 'ClienteController@registrado');
$router->get('/inicio', 'ClienteController@inicio');
$router->get('/buscar', 'ClienteController@buscar');
$router->get('/perfil', 'ClienteController@perfil');
$router->get('/sair', 'ClienteController@sair');