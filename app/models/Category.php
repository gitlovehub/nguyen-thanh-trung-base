<?php 

namespace App\Models;

class Category extends BaseModel
{
    public function selectAllCategory() {
        $sql = "SELECT * FROM `categories`";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function insertDataCategory($id, $name, $status) {
        $sql = "INSERT INTO `categories` VALUES (?, ?, ?)";
        $this->setQuery($sql);
        return $this->execute([$id, $name, $status]);
    }

    public function idCategory($id) {
        $sql = "SELECT * FROM `categories` WHERE id=?";
        $this->setQuery($sql);
        return $this->loadRow([$id]);
    }

    public function updateCategory($id, $name, $status) {
        $sql = "UPDATE `categories` SET name=?, status=? WHERE id=?";
        $this->setQuery($sql);
        return $this->execute([$name, $status, $id]);
    }

    public function deleteCategory($id) {
        $sql = "DELETE FROM `categories` WHERE id=?";
        $this->setQuery($sql);
        return $this->execute([$id]);
    }
}