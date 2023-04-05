<?php

class animal
{
    public $nombre;

    public function __construct($nombre)
    {
        $this->nombre = $nombre;
    }
}

class oveja extends animal
{

    public $size;
    public function __construct($nombre, $size)
    {
        parent::__construct($nombre);
        $this->size = $size;
    }


    public function info()
    {
        return "oveja nombre $this->nombre , sizw $this->size";
    }
}
$oveja = new oveja('blanca', 21212);
echo $oveja->info();
