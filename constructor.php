<?php
echo "hola";

class Usuario { 

    //propiedadas
public $nombre;
public $edad;
public $pais;
// metodo constructor crear metod constructor 
public function __construct($nombre,$edad,$pais)
{
    // para cada propiedad 
    // la propiedad this almacena lo que pase 
    $this->nombre = $nombre;
    $this->edad = $edad;
    $this->pais = $pais;
}

public function saludo(){
    return "hola constructores";
}
}
$usuario1 = new Usuario('alex', 22 ,'colombia');
$usuario2 = new Usuario('alejandro', 22 ,'peru');

echo $usuario1->saludo();
?>