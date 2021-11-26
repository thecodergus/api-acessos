<?php

use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';

$app = AppFactory::create();

$app->addRoutingMiddleware();

// Configurar o modulo que capta o ip do request
$checkProxyHeaders = true;
$trustedProxies = ['10.0.0.1', '10.0.0.2'];
$app->add(new RKA\Middleware\IpAddress($checkProxyHeaders, $trustedProxies));

// Rotas
$routes = require __DIR__ ."/../app/routes/index.php";
$routes($app);

$app->run();
