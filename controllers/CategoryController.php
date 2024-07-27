<?php 

class CategoryController
{
    public function index() {
        $obj = new Category();
        $data = $obj->selectAll();
        include 'views/category/index.php';
    }
}