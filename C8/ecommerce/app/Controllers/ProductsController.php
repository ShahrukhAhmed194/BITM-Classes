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

  public function addProduct($postData, $filesData){
    // files direct o access kora jay.shubidhar jonno var a nea asha.
    print_r($filesData);exit;
    // print_r($_SERVER);
    $imageName = $filesData['product_image']['name'];

    $imageTmpName = $filesData['product_image']['tmp_name'];

    

    move_uploaded_file($imageTmpName, "C:/xampp/htdocs/BITM/C8/ecommerce/uploads".$imageName);

    $postData['name'] = filter_var($postData['name'], FILTER_SANITIZE_STRING);
    $postData['price'] = filter_var($postData['price'],FILTER_SANITIZE_NUMBER_FLOAT);
    $postData['description'] = filter_var($postData['description'],FILTER_SANITIZE_STRING);


    // creating string from array.
    $values = "'".$postData['name']."',".$postData['price'].",'".$postData['description']."'";
    return $this->model->addProducts($values);
  }
   
}