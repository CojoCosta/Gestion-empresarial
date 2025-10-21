<?php
require_once 'Bebida.php';
class Refresco extends Bebida{
    private $porcentajeAzucar;
    private $promocion;

    public function __construct($id, $litros, $precio, $marca, $porcentajeAzucar, $promocion){
        parent :: __construct($id, $litros, $precio, $marca);
        $this -> porcentajeAzucar = $porcentajeAzucar;
        $this -> promocion = $promocion;
    }

    public function setPorcentajeAzucar($porcentajeAzucar){
        $this -> porcentajeAzucar = $porcentajeAzucar;
    }
    
    public function setPromocion($promocion){
        $this -> promocion = $promocion;
    }
    
    public function getPorcentajeAzucar(){
        $this -> porcentajeAzucar;
    }

    public function getPromocion(){
        $this -> promocion;
    }

    public function calcularPrecio()
    {
        return $this->promocion ? $this->precio * 0.9 : $this->precio; // Si tiene promo ps metemos solo 90% del precio
    }

    public function mostrarDatos()
    {
        parent::mostrarDatos();
        echo  "Porcentaje de Azucar: {$this->porcentajeAzucar}, Promoción del 10%: {$this->promocion}";
    }
}