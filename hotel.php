





 

<center>
<form action="" method="POST">
    <label for="">ingrese numero de noches </label><br>
    <input type="text" name="numeroDeNoches">  
       <input type="submit" value="generar">
</form>

<?php
 
 if (isset($_REQUEST['numeroDeNoches'])) {  
    $numeroDeNoches = $_POST['numeroDeNoches'];
    
     $total_hospedaje= $numeroDeNoches *140;
    echo "total a pagar ";
     echo "<b>" .$total_hospedaje. "</b>"."€";
      }



?></center>