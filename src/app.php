<?php

use Symfony\Component\Routing;

$routes = new Routing\RouteCollection();

//$routes->add('index', new Routing\Route('/', array('name' => 'GeekHub!')));
//$routes->add('hello', new Routing\Route('/hello/{name}', array('name' => 'World')));
//$routes->add('bye', new Routing\Route('/bye'));


$routes->add('leap_year', new Routing\Route('/is_leap_year/{year}', array(
    'year' => null,
    '_controller' => 'Calendar\Controller\LeapYearController::indexAction',
)));

return $routes;