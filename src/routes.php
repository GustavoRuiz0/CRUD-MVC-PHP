<?php
use core\Router;
use src\controllers\UsuariosController;

$router = new Router();

$router->get('/', 'HomeController@index');
$router->get('/novo', 'UsuariosController@add');

$router->post('/novo', 'UsuariosController@addAction');


$router->get('/usuario{id}/editar', 'UsuariosController@edit');

$router->get('/usuario{id}/editar', 'UsuariosController@editAction');

$router->post('/usuario{id}/excluir', 'UsuariosController@del');
