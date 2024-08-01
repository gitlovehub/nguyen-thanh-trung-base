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
}