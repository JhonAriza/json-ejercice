<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<h1>contactos    </h1>
    <fieldset><script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
          <legend>conf.inpty</legend>
    <form action="" method="POST" action="nnn.php">
    <input type="text" name="numero">  
       <input type="submit" value="generar">
</form>
    </fieldset>

   <form action="procesar.php" method="POST"><script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   <?php if(isset($_POST['numero'])){ ?>


    
   <?php for ($i=1; $i <= $_POST['numero']; $i++) {  ?>
    
     <input type="text" name="name[]" placeholder="name"> <br>

     <?php } ?>  <?php } ?>





<input type="submit"  value="procesar"> 


   </form> 

</body>
</html>