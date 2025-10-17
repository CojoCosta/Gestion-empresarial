<?php
class Bebida
{
    private $id;
    private $litros;
    private $precio;
    private $marca;

    public function __construct($id, $litros, $precio, $marca){
        $this->id = $id;
        $this->litros = $litros;
        $this->precio = $precio;
        $this->marca = $marca;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function setLitros($litros){
        $this->litros = $litros;
    }

    public function setPrecio($precio){
        $this->precio = $precio;
    }

    public function setMarca($marca){
        $this->marca = $marca;
    }

    public function getId(){
        return $this->id;
    }
    
    public function getLitros(){
        return $this->litros;
    }

    public function getPrecio(){
        return $this->precio;
    }
    
    public function getMarca(){
        return $this->marca;
    }
}
