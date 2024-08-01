<?php 

namespace App\Controllers;
use App\Models\Category;

class CategoryController extends BaseController
{
    protected $category;

    public function __construct()
    {
        $this->category = new Category();
    }

    public function index() {
        $obj = new Category();
        $data = $obj->selectAllCategory();
        return $this->render('category.list', compact('data'));
    }

    public function create() {
        return $this->render('category.add');
    }

    public function store() {
        if (isset($_POST["btn-add"])) {
            $error = [];
            if (empty($_POST["name"])) {
                $error [] = 'Name is required.';
            }
            if (empty($_POST["status"])) {
                $error [] = 'Status is required.';
            }
            if (count($error)) {
                flash('errors', $error, 'add');
            } else {
                $check = $this->category->insertDataCategory(null, $_POST["name"], $_POST["status"]);
                if ($check) {
                    flash('success', 'Thêm mới thành công', 'add');
                } else {
                    flash('errors', 'Thêm mới thất bại', 'add');
                }
            }
        }
    }
}