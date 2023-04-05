<?php
class persona
{
    public $nombre;
    public $apellido;
    public $edad;
    public $direccion;
    public $telefono;
    public $ciudad;

    public function __construct($nombre,$apellido,$edad,$direccion,$telefono,$ciudad) {
        $this->nombre = $nombre;
        $this->apellido = $apellido ;
        $this->edad = $edad ;
        $this->direccion = $direccion ;
        $this->telefono = $telefono ;
        $this->ciudad = $ciudad ;
  }
}

class estudiante extends persona
{
    public $carrera;

    public function __construct($carrera,$nombre,$apellido,$edad,$direccion,$telefono,$ciudad) {
        $this->carrera = $carrera;
        parent::__construct($nombre,$apellido,$edad,$direccion,$telefono,$ciudad);
  

        
    }

    public function mostrarDatos(){
        return " la carrera es $this->carrera
         su nomre registrado es  : $this->nombre
          y apellido . $this->apellido 
          su telefono es :: $this->edad 
          $this->direccion
         $this->telefono 
          de la ciudad de 
           ...$this->ciudad";
    }
 
  
}


$estudiante = new estudiante('ingeniero', 'alex',   'ariza',   27,   'mdsfvkjdshf',   '564564564564',  'bogota');
echo $estudiante->mostrarDatos();
