<?php
require_once 'Figura.php';
require_once 'InterfazArea.php';

class Circulo extends Figura implements Area, Formula
{
    private $radio;

    public function __construct($color, $radio)
    {
        parent::__construct($color);
        $this->radio = $radio;
    }

    public function area()
    {
        echo "El area del circulo es: " . number_format(pi() * pow($this->radio, 2), 2);
    }
    public function volumen()
    {
        echo "Circulos no tienen volumen";
    }
}
?>