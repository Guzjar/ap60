 <?php
class coche {
    private $marca;
    private $modelo;
    function __construct($marca="no tienes uno asignado",$modelo="no tienes uno asignado"){
        $this->marca=$marca;
        $this->modelo=$modelo;
    }
    public function getmarca(){
        return $this->marca;
    }
    public function getmodelo(){
        return $this->modelo;
    }
}
$coche1=new coche("twingo","pique");
echo $coche1->getmarca() .$coche1->getmodelo();