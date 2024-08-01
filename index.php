<?php 
session_start();
require_once 'env.php';
require_once 'vendor/autoload.php';
require_once 'common/route.php';

// $url = isset($_GET["url"]) ? $_GET["url"] : "/";

// switch ($url) {
//     case '/':
//         $cate = new CategoryController();
//         $cate->index();
//         break;
//     case 'add':
//         $cate = new CategoryController();
//         $cate->create();
//         break;
//     default:
//         $cate = new CategoryController();
//         $cate->index();
//         break;
// }