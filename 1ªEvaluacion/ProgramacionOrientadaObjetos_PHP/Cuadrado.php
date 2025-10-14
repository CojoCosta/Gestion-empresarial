<?php
require_once 'Figura.php';
class Cuadrado extends Figura implements Area, Formula
{
    private $lado;

    public function __construct($color, $lado)
    {
        parent::__construct($color);
        $this->lado = $lado;
    }

    public function area()
    {
        echo "El area del cuadrado es: " . number_format(pow($this->lado, 2), 2);
    }
    public function volumen()
    {
        echo "Los cuadrados no tienen volumen";
    }
}
?>