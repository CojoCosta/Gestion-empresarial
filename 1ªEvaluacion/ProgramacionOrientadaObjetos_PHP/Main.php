<?php
require_once 'Circulo.php';
require_once 'Cuadrado.php';
$circulo1 = new Circulo("rojo", 5);
$circulo1->mostrarColor();
echo "<br>";
$circulo1->area();
echo "<br>";

$cuadrado1 = new Cuadrado("azul", 10);
$cuadrado1->mostrarColor();
echo "<br>";
$cuadrado1->area();
echo "<br>";
?>