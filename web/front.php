<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing;
use Symfony\Component\HttpKernel;
use Symfony\Component\HttpKernel\Controller\ArgumentResolver;
use Symfony\Component\HttpKernel\Controller\ControllerResolver;

//function render_template(Request $request)
//{
//    extract($request->attributes->all(), EXTR_SKIP);
//    ob_start();
//    include sprintf(__DIR__.'/../src/pages/%s.php', $_route);
//
//    return new Response(ob_get_clean());
//}

$request = Request::createFromGlobals();

$routes = include __DIR__ . '/../src/app.php';

$context = new Routing\RequestContext();
$matcher = new Routing\Matcher\UrlMatcher($routes, $context);

$controllerResolver = new ControllerResolver();
$argumentResolver = new ArgumentResolver();

$framework = new Simplex\Framework($matcher, $controllerResolver, $argumentResolver);
$response = $framework->handle($request);

$response->send();

/* all routes dump */
//$dumper = new Routing\Matcher\Dumper\PhpMatcherDumper($routes);
//echo '<pre>';
//echo $dumper->dump();
