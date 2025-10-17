<?php
require_once 'Bebida.php';
class Agua extends Bebida{
    private $origen;
    public function __construct($id, $litros, $precio, $marca, $origen)
    {
        parent ::__construct($id, $litros, $precio, $marca);
        $this -> origen = $origen;
    }
    
    public function setOrigen($origen){
        return $this -> origen = $origen;
    }
    public function getOrigen(){
        return $this -> origen;
    }

}