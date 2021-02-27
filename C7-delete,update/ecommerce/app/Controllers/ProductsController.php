<?php
namespace App\Controllers;
// include "vendor/autoload.php";
use App\Models\Product;

class ProductsController
 {
     protected $model;

  public function __construct(){ 
    $this->model = new Product;
  }

  public function getAll(){
    return $this->model->getAll();
  }

  public function viewindex($name){
    return $this->model->getByName($name);
  }

  public function addProduct($postData){

    // creating string from array.
    $values = "'".$postData['name']."',".$postData['price'].",'".$postData['description']."'";
    return $this->model->addProducts($values);
  }
   
}