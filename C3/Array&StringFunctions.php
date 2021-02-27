<?php
$colors = ['Red', 'Green', 'Blue'];

$chk = in_array("blue",$colors);
var_dump($chk);
echo"<hr>";

$chk = is_array($colors);
var_dump($chk);
echo"<hr>";

$update = str_replace('Blue','yellow',$colors);
foreach ($update as $ind =>$val){
    echo $val." ";
}
echo"<hr>";
$str = "Numbers : ";
for($i=1;$i<10;$i++) {
    echo str_pad($str, 11, $i);
}
echo"<hr>";

