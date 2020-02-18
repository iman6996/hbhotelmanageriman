<?php

use App\Controller\ClientsController;

$router = $container->getRouter();
$router->setNamespace('App\Controller');

/**
 * Routes de base
 */
$router->get('', 'PagesController@index'); // Page d'accueil contenant entre autres la liste des rooms

/**
 * Routes ROOM
 */
$router->get('/rooms/(\d+)', 'RoomsController@show');// Affichage de 1 room

$router->get('/rooms/new/', 'RoomsController@new'); 
$router->post('rooms/', 'RoomsController@create');

/**
 * Routes CLIENT
 */
$router->get('/clients', 'ClientsController@show');

$router->get('/clients/new/','ClientsController@new');
$router->post('clients/', 'ClientsController@create' );

$router->get('/clients/edit/(\d+)' ,'ClientsController@edit');
$router->post('/clients/edit/(\d+)' ,'ClientsController@update');

$router->get('/clients/delete/(\d+)','ClientsController@delete');

$router->run();
