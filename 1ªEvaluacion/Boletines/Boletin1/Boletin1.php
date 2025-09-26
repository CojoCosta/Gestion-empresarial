<?php
function random()
{
    print rand(1, 100);
}
print "Funcion 1: ";
print random() . "<br>";

function sumar($dato1, $dato2)
{
    return $dato1 + $dato2;
}
print "Funcion 2: " . sumar(2, 2) . "<br>";


function radio($dato)
{
    return $dato ** 2 * pi();
}
print "Funcion 3: " . radio(3) . "<br>";


function escribirAleatorio()
{
    $num = rand(1, 5);
    switch ($num) {
        case 1:
            print "uno";
            break;
        case 2:
            print "dos";
            break;
        case 3:
            print "tres";
            break;
        case 4:
            print "cuatro";
            break;
        case 5:
            print "cinco";
            break;
        default;
            break;
    }
}
print "Funcion 4: ";
print escribirAleatorio() . "<br>";

function multiplos($num1, $num2)
{
    if ($num1 % $num2 == 0 || $num2 % $num1 == 0) {
        print "Son multiplos";
    } else {
        print "No son multiplos";
    }
}
print "Funcion 5: " . multiplos(2, 8) . "<br>";

function entradaMuseo($edad)
{
    if ($edad <= 8) {
        print $entrada = 0;
    } elseif ($edad >= 9 && $edad < 17) {
        print $entrada = 5;
    } elseif ($edad >= 17 && $edad < 26) {
        print $entrada = 8;
    } elseif ($edad >= 26 && $edad < 56) {
        print $entrada = 10;
    } elseif ($edad >= 56 && $edad < 66) {
        print $entrada = 5;
    } elseif ($edad > 66) {
        print $entrada = 0;
    }
}
print "Funcion 6: ";
print entradaMuseo(18) . "<br>";

function transporte($mascota)
{
    switch ($mascota) {
        case "gato":
        case "huron":
            print "gatos: " . $precio = (1) . "€";
            break;
        case "perro":
            print "perros: " . $precio = (1.5) . "€";
            break;
        case "loro":
            print "loros: " . $precio = (1) . "€";
            break;
        default:
            print "Mascota no permitida";
            break;
    }
}
print "Funcion 7: ";
print transporte("perro") . "<br>";

function bingo($edad)
{
    if ($edad < 75 || $edad > 80) {
        print "No puede participar";
    } else {
        print "El premio es: " . (0.05) * $edad . "€";
    }
}
print "Funcion 8: ";
print bingo(66) . "<br>";

function parImpar($num)
{
    print $num % 2 == 0 ? "Es par" : "Es impar";
}
print "Funcion 9: ";
print parImpar(66) . "<br>";

function fibonacci()
{
    $fin = 10000;
    $a = 1;
    $b = 2;
    $c = $a + $b;
    print $a . ", " . $b . ", ";
    while ($c < $fin) {
        $a = $b;
        $b =  $c;
        $c = $a + $b;

        if ($c < $fin) {
            print $c . ", ";
        }
    }
    print "<br>";
}
print "Funcion 10: ";
print fibonacci();


function tablaMultiplicar()
{
    print "<table border='1' cellspacing='0' cellpadding='5' style='border-collapse: collapse; text-align: center;'>";
    
    for ($i = 1; $i <= 10; $i++) {
        print "<tr>";
        print "<th>$i</th>"; // Cabecera lateral en negrita
        for ($j = 1; $j <= 10; $j++) {
            echo "<td>" . ($i * $j) . "</td>"; // Celdas normales
        }
        print "</tr>";
    }
}
print "Funcion 11: " . "<br>";
print tablaMultiplicar() . "<br>";


function factorial($num)
{
    $i = 1;
    $resultado = 1;
    do {
        $resultado *= $i;
        $i++;
    } while ($i <= $num);
    print $resultado;
}
print "Funcion 12: ";
print factorial(6) . "<br>";
