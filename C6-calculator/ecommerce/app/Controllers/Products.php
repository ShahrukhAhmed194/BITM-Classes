<?php
namespace App\Controllers;
use App\models\Database;

class Products{

    public function getAll()
    {
        $databaseObj = new Database;
        $selectQuery = "SELECT * FROM products";
        $products = $databaseObj->select($selectQuery);

        return $products;
      
    }
}