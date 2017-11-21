<?php

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

$routes = new RouteCollection();

$routes->add('bye', new Route('/bye'));
$routes->add('index', new Route('/{name}', array('name' => 'World')));


return $routes;
