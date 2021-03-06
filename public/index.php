<?php declare(strict_types=1);

include '../vendor/autoload.php';

error_reporting(E_ALL);

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

$request = Zend\Diactoros\ServerRequestFactory::fromGlobals(
    $_SERVER, $_GET, $_POST, $_COOKIE, $_FILES
);

$router = new League\Route\Router;

// map a route

$router->map('GET', '/', 'App\Controllers\LoginController::index');
$router->map('GET', '/login', 'App\Controllers\LoginController::login');
$router->map('POST', '/login', 'App\Controllers\LoginController::loginPost');


$router->map('GET', '/mesdemandes', 'App\Controllers\LoginController::index');


$router->map('GET', '/test/{id}','App\Controllers\LoginController::test');







$response = $router->dispatch($request);

// send the response to the browser
(new Zend\HttpHandlerRunner\Emitter\SapiEmitter)->emit($response);
