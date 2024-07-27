<?php 

require_once 'env.php';
require_once 'models/Database.php';
require_once 'models/Category.php';
require_once 'controllers/CategoryController.php';

$url = isset($_GET["url"]) ? $_GET["url"] : "/";

switch ($url) {
    case '/':
        $cate = new CategoryController();
        $cate->index();
        break;
    case 'add':
        $cate = new CategoryController();
        $cate->create();
        break;
    default:
        $cate = new CategoryController();
        $cate->index();
        break;
}