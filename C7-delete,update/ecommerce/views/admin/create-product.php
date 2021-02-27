<?php
include "../../vendor/autoload.php";
use App\Controllers\ProductsController;

$productsObj = new ProductsController;

$insert = false;
if(!empty($_POST)){
    $insert = $productsObj->addProduct($_POST);
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Admin | Create Producrt</title>
</head>
<body>
<div class="container">
   <h3> Header</h3>
<hr>
    <div class="row">
        <div class="col-md-3 bg-dark text-white"  style="height:100vh">
            MENUS
        </div>
        <div class="col-md-6">
         <h3 class="text-info">Create/ Add Products.</h3>
           <div class="card">
               <div class="card-body">
                <?php if($insert){?>
                     <div class="alert alert-success">
                     successfully product added
                     </div>
                     <?php } ?>
                  <form action="" method="POST">
                  <div class="form-group">
                  <label>Product Name:</label>
                  <input class="form-control"type="text" name="name">
                  </div>
                  
                  <div class="form-group">
                  <label>Product Price:</label>
                  <input class="form-control" type="number" name="price">
                  </div>
                  
                  <div class="form-group">
                  <label>Product Description:</label>
                  <textarea class="form-control" name="description"></textarea>
                  </div>

                  <div class="form-group">
                  <input class="btn btn-warning" type="submit" value="Add Product">
                  </div>
                  
                  </form>
               </div>
           </div>
        </div>
    </div>
 </div>


</body>
</html>