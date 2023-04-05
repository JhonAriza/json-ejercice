<?php
class objeto{


public $nombre;
public function __construct($nombre){
    $this->nombre=$nombre;
}
}
$objeto1 = new objeto('barco');
echo $objeto1->nombre;
?>