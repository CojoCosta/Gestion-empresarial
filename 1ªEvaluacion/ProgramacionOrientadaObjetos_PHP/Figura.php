<?php
//Definir clase abstracta
abstract class Figura
{
    protected $color;
    protected static $texto = "El color de la figura es: ";
    const EXPRE = "... que chuliogay";
    const GREEN = "";
    public function __construct($color)
    {
        $this->color = $color;
    }

    abstract public function mostrarColor();
    // 

}

class Circulo extends Figura
{
    private $radio;
    public function __construct($color, $radio)
    {
        parent::__construct($color);
        $this->$radio = $radio;
    }

    public function mostrarColor()
    {
        echo self::$texto . $this->color . Figura::EXPRE;
    }

    public function area()
    {
        echo "El area del circulo es" . number_format(pi() * pow($this->radio, 2), 2);
    }
}
class Cuadrado extends Figura
{
    private $lado;
    public function __construct($color, $lado)
    {
        parent::__construct($color);
        $this->lado = $lado;
    }

    public function mostrarColor()
    {
        echo self::$texto . $this->color . Figura::EXPRE;
    }

    public function area()
    {
        echo "El area del cuadrado es " . number_format($lado * $lado, 2);
    }
    // public function mostrarColor() {}
}

$circulo1 = new Circulo("rojo", 5);

$circulo1->mostrarColor();

echo "<br>";

$circulo1->area();

?>