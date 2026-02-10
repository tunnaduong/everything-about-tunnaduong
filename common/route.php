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
    $router->get("/nhung-nguoi-da-gap/{name}", [App\Controllers\HomeController::class, 'person_detail']);

    $router->get("/about", [App\Controllers\HomeController::class, 'about']);

    $router->get("/what-i-do", [App\Controllers\HomeController::class, 'what_i_do']);

    $router->get("/connect-with-me", [App\Controllers\HomeController::class, 'connect_with_me']);

    $router->any("/write-for-me", [App\Controllers\HomeController::class, 'write_for_me']);


    $router->get("/what-i-do/projects/{project_id}", [App\Controllers\HomeController::class, 'project']);

    // khu vực cần quan tâm -----------
    //$router->get('test', [App\Controllers\ProductController::class, 'index']);

    # NB. You can cache the return value from $router->getData() so you don't have to create the routes each request - massive speed gains
    $dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

    $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);

    // Print out the value returned from the dispatched function
    echo $response;
} catch (Phroute\Phroute\Exception\HttpRouteNotFoundException $e) {
    return (new App\Controllers\HomeController)->error404();
} catch (Phroute\Phroute\Exception\HttpMethodNotAllowedException $e) {
} catch (Exception $e) {
    echo $e->getMessage();
}
