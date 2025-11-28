 <?php
class coche {
    private $marca;
    private $modelo;
    public function getMarca(){
        return $this->marca;
         }
    public function setMarca($marca){
        $this->marca= $marca;
    }
    public function getmodelo(){
        return $this->modelo;
    }
    public function setmodelo($modelo){
        $this ->modelo= $modelo;
    }
}
$coche1=new coche();
$coche1->setmodelo('pique');
$coche1->setMarca('twingo');
echo $coche1->getMarca().",".$coche1->getmodelo();
 