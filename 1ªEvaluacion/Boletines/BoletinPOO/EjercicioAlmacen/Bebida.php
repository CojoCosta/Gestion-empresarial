<?php
abstract class Bebida
{
    protected $id;
    protected $litros;
    protected $precio;
    protected $marca;

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

    abstract public function calcularPrecio();

    public function mostrarDatos()
    {
        echo "ID: {$this->id},Litros: {$this->litros} Precio: {$this->calcularPrecio()} Marca: {$this->marca}";
    }
}
