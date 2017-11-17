<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

$request = Request::createFromGlobals();
$response = new Response();

$map = [
    '/' => __DIR__ . '/../src/pages/index.php',
    '/bye' => __DIR__ . '/../src/pages/bye.php'
];

$path = $request->getPathInfo();
//var_dump($path);die;
if (isset($map[$path])) {
    ob_start();
    include ($map[$path]);
    $response->setContent(ob_get_clean());
} else {
    $response->setStatusCode(404);
    $response->setContent('Not Found');
}

$response->send();
