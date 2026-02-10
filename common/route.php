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

    $router->get("/admin", [App\Controllers\AdminController::class, 'index']);
    $router->any("/admin/login", [App\Controllers\AdminController::class, 'login']);
    $router->get("/admin/logout", [App\Controllers\AdminController::class, 'logout']);

    $router->get("/admin/timeline", [App\Controllers\AdminController::class, 'timeline']);
    $router->any("/admin/timeline/create", [App\Controllers\AdminController::class, 'timeline_create']);
    $router->any("/admin/timeline/{id}/edit", [App\Controllers\AdminController::class, 'timeline_edit']);
    $router->post("/admin/timeline/{id}/delete", [App\Controllers\AdminController::class, 'timeline_delete']);

    $router->get("/admin/luubut", [App\Controllers\AdminController::class, 'luubut']);
    $router->any("/admin/luubut/{id}/edit", [App\Controllers\AdminController::class, 'luubut_edit']);
    $router->post("/admin/luubut/{id}/delete", [App\Controllers\AdminController::class, 'luubut_delete']);

    $router->get("/admin/projects", [App\Controllers\AdminController::class, 'projects']);
    $router->any("/admin/projects/create", [App\Controllers\AdminController::class, 'projects_create']);
    $router->any("/admin/projects/{id}/edit", [App\Controllers\AdminController::class, 'projects_edit']);
    $router->post("/admin/projects/{id}/delete", [App\Controllers\AdminController::class, 'projects_delete']);

    $router->get("/admin/people", [App\Controllers\AdminController::class, 'people']);
    $router->any("/admin/people/create", [App\Controllers\AdminController::class, 'people_create']);
    $router->any("/admin/people/{id}/edit", [App\Controllers\AdminController::class, 'people_edit']);
    $router->post("/admin/people/{id}/delete", [App\Controllers\AdminController::class, 'people_delete']);

    $router->get("/admin/memories", [App\Controllers\AdminController::class, 'memories']);
    $router->any("/admin/memories/create", [App\Controllers\AdminController::class, 'memories_create']);
    $router->any("/admin/memories/{id}/edit", [App\Controllers\AdminController::class, 'memories_edit']);
    $router->post("/admin/memories/{id}/delete", [App\Controllers\AdminController::class, 'memories_delete']);

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
