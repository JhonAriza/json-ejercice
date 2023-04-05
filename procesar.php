<?php
echo  '<pre> ';
print_r($_POST);
echo "esto es un json";
 $mijson = json_encode($_POST);echo  '<pre> ';
 echo $mijson;
 
echo "<br>";echo  '<pre> ';
echo "esto es un json";
 $objeto= json_encode($mijson);
 echo  '<pre> ';
 echo $objeto;
?>    