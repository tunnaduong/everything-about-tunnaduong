<?php

use Phroute\Phroute\RouteCollector;

$url = !isset($_GET['url']) ? "/" : $_GET['url'];
try {
    $router = new RouteCollector();


    // khu vực cần quan tâm -----------
    // bắt đầu định nghĩa ra các đường dẫn

    $router->get("/", [App\Controllers\HomeController::class, 'index']);

    $router->get("/nhat-ky-hang-ngay", [App\Controllers\HomeController::class, 'everyday']);

    $router->get("/nhung-nguoi-da-gap", [App\Controllers\HomeController::class, 'people']);

    $router->get("/about", [App\Controllers\HomeController::class, 'about']);


    // khu vực cần quan tâm -----------
    //$router->get('test', [App\Controllers\ProductController::class, 'index']);

    # NB. You can cache the return value from $router->getData() so you don't have to create the routes each request - massive speed gains
    $dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

    $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);

    // Print out the value returned from the dispatched function
    echo $response;
} catch (Exception $e) {
    var_dump($e->getMessage());
    die;
}