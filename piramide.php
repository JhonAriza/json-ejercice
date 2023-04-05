<form action="" method="POST">
    <input type="text" name="numero">  
       <input type="submit" value="generar">
</form>





 

<center> 
<?php
 
$numero = $_POST['numero'];

 

for ($i=0; $i <=$numero; $i++) { 

   for ($x=0; $x<$i ; $x++) { 
  
    echo $i;
   }  echo "<br>";

}
?></center>