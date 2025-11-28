<?php
class coche {
    public $marca;
    public $modelo;
}
function mostrarInfo(){
    $coche1= new coche();
    $marca1=$coche1->marca="twingo";
    $modelo1=$coche1->modelo="pique";
    echo "$marca1,$modelo1";
}
echo mostrarInfo();