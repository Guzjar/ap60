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
$coche1=new coche("toyota","corola");
echo $coche1->getmarca() .$coche1->getmodelo();
class cuentaBancaria {
    public $titula;
    public $saldo;
    public function __construct($titula="debe de colocar un titular",$saldo="0"){
        $this->titula=$titula;
        $this->saldo=$saldo;
    }
    public function getTitulo(){
        return $this->titulo;
    }
    public function getsaldo(){
        return $this->saldo;
    }
}