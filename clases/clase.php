<?php

 class Persona {

private $_nombre;
private $_apellido;
 


public function __construct()
{
    //$this->imprimeNombre();
}

public function setApellido($apellido){
    $this->_apellido = $apellido;
}
 
public function setNombre($nombre){
    $this->_nombre = $nombre;
}

public function getNombre()
{
    return $this->_nombre;
}
public function getApellido()
{
    return $this->_apellido;
}
public function imprimeNombre(){ echo "nombre".$this->getNombre();}


 }

?>