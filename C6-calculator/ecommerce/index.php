<?php
include "vendor/autoload.php";
use App\Controllers\Products;

//  use App\Controllers\error;
//  $error = new error;

$productObj = new Products;
$products = $productObj->getALL();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Ecommerce - Index</title>
</head>
<body>

     <div class="container">
         <hr>
         <div class="row">
             <?php foreach ($products as $product) { ?>
                 <div class="col-md-4">
                     <div class="card">
                         <div class="card-body">
                             <a href="views/product.php">
                                 <h3 class="text-info"><?= $product['name'];?></h3>
                             </a>
                             <h5><?= $product['price']?> Taka </h5>
                             <p><?= $product['description']?></p>
                         </div>
                     </div>
                 </div>
             <?php } ?>
         </div>
     </div>
</body>
</html>