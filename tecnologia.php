<?php



class tecnologia{
public $name;

public function __construct($name){
    $this->name=$name;
    
}
}
class celular extends tecnologia{
    public $marca;
    public function __construct($name,$marca){
 parent::__construct($name);
 $this->marca=$marca;
        
    }
}


$celular1 = new celular('y9prime','huawei');
echo $celular1->name;
echo $celular1->marca;















$cpu = new tecnologia('cpu');

echo $cpu->name;

?>