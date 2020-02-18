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
$router->get('/rooms/(\d+)', 'RoomsController@show'); // Affichage de 1 room

/**
 * Routes CLIENT
 */
$router->get('/clients', 'ClientsController@show');

$router->get('/clients/new/','ClientsController@new');


$router->run();
