<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>codigo de verificacion </h1>
    <form action="" method="post">
    <input type="numero" name="numero">
    <input type="text" name="email">
 <button type="submit" >comprobar numero </button>
    </form>

<?php

 
$_SESSION['email'];
$numero = $_POST['numero'];
$array=['3020','3001','3300','3040','3050','3006','3007','3800','3009','3090','3090'];
if ($numero ==  $array) {
    echo "numero verificado" ;
}  else{
   echo "no se ha verificado";
}
?>
</body>
</html>