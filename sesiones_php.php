<?php
if (isset($_POST["enviar"])) {
    if ($_POST["enviar"]) {
        session_start();
        $_SESSION["usuario"] = htmlentities($_POST["usuario"]);
        $_SESSION["password"] = htmlentities($_POST["password"]);
        
    header("location: paginasesion3.php");
    }
}







?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 
    <div class="container mt-5">
        <form method="POST">   
<div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">usuario</label>
    <div class="col-sm-10">
      <input type="usuario" class="form-control" name="usuario" placeholder="usuario">
    </div>
  
  </div>
  
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name="password" placeholder="password">
    </div>
  
  </div>
  <input type="submit"    value="Enviar" name="enviar">
  </form>

    </div>
 



</body>
</html>