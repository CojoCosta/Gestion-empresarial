<?php
function random()
{
    print rand(1, 100);
}

function sumar($dato1, $dato2)
{
    return $dato1 + $dato2;
}


function radio($dato)
{
    return $dato * $dato * pi();
}


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

function multiplos($num1, $num2)
{
    if ($num1 % $num2 == 0 || $num2 % $num1 == 0) {
        print "Son multiplos";
    } else {
        print "No son multiplos";
    }
}

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

function transporte($mascota)
{
    switch ($mascota) {
        case "gato":
            print "gatos: " + $precio = 1 + "€";
            break;
        case "huron":
            print "hurones: " + $precio = 1 + "€";
            break;
        case "perro":
            print "perros: " + $precio = 1.5 + "€";
            break;
        case "loro":
            print "loros: " + $precio = 1 + "€";
            break;
        default:
            print "Mascota no permitida";
            break;
    }

    function bingo($edad){
        if($edad < 75 || $edad > 80){
            print "No puede participar";
        } else{
            print "El premio es: " + 0.05 * $edad +"€";
        }
    }

    function parImpar($num){
        print $num%2==0 ? "Es par": "Es impar";
    }

    function fibonacci(){
        while($fin < 10000){
            
        }
    }
}
