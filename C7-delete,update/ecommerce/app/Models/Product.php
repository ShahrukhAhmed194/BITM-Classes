<?php
namespace App\Models;
use App\models\Database;

class Product extends Database
{
    protected $table = 'products';

    public function getAll()
    {
        $selectQuery = "SELECT * FROM ".$this->table;
        $products = $this->select($selectQuery);

        return $products;
      
    }

    public function getByName($name)
    {
        $selectByNameQuery = "SELECT * FROM ".$this->table." WHERE name='$name' LIMIT 1";
        $res=$this->select($selectByNameQuery);
        return $res[0];
    }
    // scope resolution (::) is used to access static function. 

    public function addProducts(string $values){
        $insertQuery = "INSERT INTO ".$this->table."(name, price, description) VALUES (".$values.")";
        $res=$this->insert($insertQuery);
        return $res;
    }
}