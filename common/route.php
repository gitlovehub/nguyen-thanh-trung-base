<?php

use Phroute\Phroute\RouteCollector;

$url = !isset($_GET['url']) ? "/" : $_GET['url'];

$router = new RouteCollector();

// Check đăng nhập
// $router->filter('auth', function(){
//     if(!isset($_SESSION['auth']) || empty($_SESSION['auth'])){
//         header('location: ' . BASE_URL . 'login');die;
//     }
// });

// ----------- Khu vực cần quan tâm -----------
// bắt đầu định nghĩa ra các đường dẫn
$router->get('/', function() {
    return 'Trang chủ';
});

//định nghĩa đường dẫn trỏ đến Product Controller
// $router->get('list-product',[App\Controllers\ProductController::class,'index']);
// $router->get('add-product',[App\Controllers\ProductController::class,'addProduct']);
// $router->post('post-product',[App\Controllers\ProductController::class,'postProduct']);
// $router->get('detail-product/{id}',[App\Controllers\ProductController::class,'detail']);

// $router->post('edit-product/{id}',[App\Controllers\ProductController::class,'editProduct']);
// ----------- Khu vực cần quan tâm -----------
$router->get('list',            [App\Controllers\CategoryController::class, 'index']);
$router->get('add',             [App\Controllers\CategoryController::class, 'create']);
$router->post('store',          [App\Controllers\CategoryController::class, 'store']);
$router->get('edit/{id}',       [App\Controllers\CategoryController::class, 'show']);
$router->post('update/{id}',    [App\Controllers\CategoryController::class, 'update']);
$router->get('destroy/{id}',    [App\Controllers\CategoryController::class, 'delete']);

# NB. You can cache the return value from $router->getData() so you don't have to create the routes each request - massive speed gains
$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);

// Print out the value returned from the dispatched function
echo $response;