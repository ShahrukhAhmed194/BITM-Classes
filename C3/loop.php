<?php
$colors = ['Red', 'Green', 'Blue'];

foreach ($colors as $index=>$values){
    echo$index."=".$values."<br>";
}


foreach ($colors as $index=>$values){
   echo "<pre>";
   var_dump($values);
   echo "</pre>";
}
echo"<hr>";

$products = [
    'name' => 'Samsung',
    'price' => 10000,
    'colors' => ['Red', 'Green', 'Blue']
];

foreach ($products as $index=>$values){
   if(is_array($values)) {
       echo "colors: ";
     foreach ($values as $ind =>$val){
         echo $val." ";
     }
   }
   else{
       echo $index." ".$values;
       echo "<br>";
   }
}
echo"<hr>";
