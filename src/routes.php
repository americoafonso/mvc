<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');
$router->get('/novo', 'UsuariosController@add');
$router->post('/novo', 'UsuariosController@AddAction');
$router->get('/usuario/{id}/editar', 'UsuariosController@edit');
$router->get('/usuario/{id}/excluir', 'UsuariosController@del');
