<?php 

namespace App\Models;

class Category extends Database
{
    public function selectAll() {
        $sql = "SELECT * FROM `categories`";
        return $this->getData($sql);
    }
}