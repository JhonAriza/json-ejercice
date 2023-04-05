<?php



class dia{

public $dia;

public function __construct($dia)
{
    $this->dia=$dia;
 
}
}
 
$lunes = new dia('lunes');
echo $lunes->dia;
 
?>