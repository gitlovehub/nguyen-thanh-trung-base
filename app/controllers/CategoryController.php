<?php 

namespace App\Controllers;
use App\Models\Category;

class CategoryController extends BaseController
{
    protected $category;

    public function __construct() {
        $this->category = new Category();
    }

    public function index() {
        $data = $this->category->selectAllCategory();
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
                    flash('success', 'Thao tác thành công', 'add');
                } else {
                    flash('errors', 'Thao tác thất bại', 'add');
                }
            }
        }
    }

    public function show($id) {
        $data = $this->category->idCategory($id);
        return $this->render('category.edit', compact('data'));
    }

    public function update($id) {
        if (isset($_POST["btn-save"])) {

            $error = [];
            if (empty($_POST["name"])) {
                $error [] = 'Name is required.';
            }
            if (empty($_POST["status"])) {
                $error [] = 'Status is required.';
            }

            $route = 'edit/'.$id;

            if (count($error)) {
                flash('errors', $error, $route);
            } else {
                $check = $this->category->updateCategory($id, $_POST["name"], $_POST["status"]);
                if ($check) {
                    flash('success', 'Thao tác thành công', $route);
                } else {
                    flash('errors', 'Thao tác thất bại', $route);
                }
            }
        }
    }

    public function delete($id) {
        $check = $this->category->deleteCategory($id);
        if ($check) {
            flash('success', '', 'list');
        }
    }
}