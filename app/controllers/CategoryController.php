<?php 

namespace App\Controllers;
use App\Models\Category;

class CategoryController
{
    public function index() {
        $title = 'Quan li danh muc';
        $obj = new Category();
        $data = $obj->selectAll();
        include 'app/views/category/index.php';
    }
}