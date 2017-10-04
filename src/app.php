<?php

use Symfony\Component\Routing;

$routes = new Routing\RouteCollection();

$routes->add('home', new Routing\Route('/', array(
    'home' => null,
    '_controller' => 'Hello\Controller\HelloController::homeAction',
)));

$routes->add('leap_year', new Routing\Route('/is_leap_year/{year}', array(
    'year' => null,
    '_controller' => 'Calendar\Controller\LeapYearController::indexAction',
)));

$routes->add('hello', new Routing\Route('/hello/{name}', array(
    'name' => null,
    '_controller' => 'Hello\Controller\HelloController::indexAction',
)));


return $routes;