<?php 

class CategoryController
{
    public function index() {
        $title = 'Quan li danh muc';
        $obj = new Category();
        $data = $obj->selectAll();
        include 'views/category/index.php';
    }

    public function create() {
        $title = 'Them moi danh muc';
        $obj = new Category();
        
        include 'views/category/add.php';
    }
}