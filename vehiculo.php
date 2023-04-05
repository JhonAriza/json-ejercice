<?php


class vehiculo{

public $nombre;
public $llantas;

public function __construct($nombre,$llantas)
{
    $this->nombre=$nombre;
    $this->llantas=$llantas;
    
}
 
public function mostrarInfo(){
    return "el vehiculo  $this->nombre  tiene el total de $this->llantas llantas  ";
}

}

$tractomula = new vehiculo('tractomula',45);

echo $tractomula->mostrarInfo();

?>