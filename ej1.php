<?php
class coche {
    public $marca;
    public $modelo;
}
function coche1(){
    $coche1= new coche();
    $coche1->marca="twingo";
    echo "$coche1->marca";
}
echo coche1();