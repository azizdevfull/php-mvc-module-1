<?php

require_once '../core/Router.php';
require_once '../core/Controller.php';
require_once '../config/database.php';
require_once '../app/controllers/PostController.php';

// Routingni sozlash
$router = new Router();

$router->get('/', 'PostController@index');
$router->get('/posts/create', 'PostController@create');
$router->post('/posts/store', 'PostController@store');
$router->get('/posts/show', 'PostController@show');
$router->get('/posts/edit', 'PostController@edit');
$router->post('/posts/update', 'PostController@update');
$router->get('/posts/delete', 'PostController@destroy');

$router->dispatch();
