<?php
class Bebida{
    private $id;
    private $litros;
    private $precio;
    private $marca;

    public function __construct($id, $litros, $precio, $marca)
    {
        $this -> id = $id;
        $this -> litros = $litros;
        $this -> precio = $precio;
        $this -> marca = $marca;
    }
    public function getId(){
        return $this -> id;
    }
    public function getLitros(){
        return $this -> litros;
    }
    public function getPrecio(){
        return $this -> precio;
    }
    public function getMarca(){
        return $this -> marca;
    }
}