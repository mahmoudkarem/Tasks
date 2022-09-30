<?php 

$first_colors = ["red","green","blue"];
$new_colors = ["gray","white","black"];

$new = array_merge($first_colors,$new_colors);

print_r($new);

echo "<br>";


$new2 = $first_colors + $new_colors;    

print_r($new2);


?>