<?php 
<?php
class coche {
    private $marca;
    private $modelo;
    public function getMarca(){
        return $this->marca;
    public function setMarca(){
        
    }
    }
}
function mostrarInfo(){
    $coche1= new coche();
    $marca1=$coche1->marca="twingo";
    $modelo1=$coche1->modelo="pique";
    echo "$marca1,$modelo1";
}
echo mostrarInfo();