<?php

use hilo1 as GlobalHilo1;

class hilo1
{
    static public function run()
    {
        for ($i=1; $i <=5 ; $i++) { 
           echo ("A");
        }
    }
}

 
class hilo2
{
    static public function run()
    {
        for ($i=1; $i <=5 ; $i++) { 
           echo ("L");
        }
    }
}

class hilo3
{
    static public function run()
    {
        for ($i=1; $i <=5 ; $i++) { 
           echo ("E");
        }
    }
}

class hilo4
{
    static public function run()
    {
        for ($i=1; $i <=5 ; $i++) { 
           print_r ("X");
        }
    }
}

 
$hilo1 = hilo1::run();
try{
}catch(error $e){
echo "error ".$e;
}

$hilo2 = hilo2::run();
$hilo3 = hilo3::run();
$hilo4 = hilo4::run();


print_r($hilo1);
print_r($hilo2);
print_r($hilo3);
print_r($hilo4);
 
?>