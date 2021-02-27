<?php
include "../vendor/autoload.php";
use App\Controllers\ProductsController;

$productsObj = new ProductsController;

$productName = '';
if($_GET['name']){
    $productName = $_GET['name'];
}

$product = $productsObj->viewindex($productName);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Ecommerce - Home</title>
</head>
<body>
    
    <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="..." alt="Product Image">
  <div class="card-body">
    <h2 class="card-title"><?= $product['name'];?></h2>
    <h5 class="bold">Price : <?= $product['price'];?> Taka.</h5>
    <p class="card-text"><?= $product['description'];?></p>
    <a href="../" class="btn btn-primary">Go back</a>
  </div>
</div>


</body>
</html>