<?php
function reemplazar()
{
    $cadena = "abordaje";
    print str_replace("bord", "lmir", $cadena);
}

print "Funcion 1:" . "<br>";
reemplazar();
print "<br>";

function contar($frase, $letra)
{
    $cont = 0;
    for ($i = 0; $i < strlen($frase); $i++) { //Falta el limite de frase
        if ($frase[$i] == $letra) {
            $cont++;
        }
    }
    return $cont;
}

print "Funcion 2:" . "<br>";
print contar("adiooos", 'o');
print "<br>";

function validarContraseña($contraseña)
{
    print "Contraseña:".$contraseña."\n -> ";
    $longitud = strlen($contraseña);

    // Validar longitud
    if ($longitud < 8 || $longitud > 12) {
        return "Contraseña no válida: debe tener entre 8 y 12 caracteres.";
    }

    // Validar que no empiece por número
    if (is_numeric($contraseña[0])) {
        return "Contraseña no válida: no debe empezar por un número.";
    }

    return "Contraseña válida.";
}

print "Funcion 3:" . "<br>";
print validarContraseña("Holaa");
print "<br>";
print validarContraseña("Holaa1234");
print "<br>";
print validarContraseña("1231224");
print "<br>";

function pares()
{
    $pares = array();


    for ($i = 1; $i <= 10; $i++) {
        $pares[] = $i * 2;
    }

    foreach ($pares as $num) {
        echo $num . "<br>";
    }
}

print "Funcion 4:" . "<br>";
pares();
print "<br>";

function meses()
{
    $meses = array(
        "enero",
        "febrero",
        "marzo",
        "abril",
        "mayo",
        "junio",
        "julio",
        "agosto",
        "septiembre",
        "octubre",
        "noviemnbre",
        "diciembre"
    );

    $meses_m = array(); 
    foreach ($meses as $mes) {
        if (strtolower($mes[0]) === 'm') {
            $meses_m[] = $mes;

        }
    }

    print_r($meses_m);
}

print "Funcion 5:" . "<br>";
meses();
print "<br>";

function quitaAzul()
{
    $colores = array('rojo', 'verde', 'amarillo', 'azul', 'rosa');

    for ($i = count($colores) - 1; $i >= 0; $i--) {
        if ($colores[$i] === 'azul') {
            unset($colores[$i]);
        }
    }
    $array_nuevo = array_values($colores);
    print_r($array_nuevo);
}
print "Funcion 6:" . "<br>";
quitaAzul();
print "<br>";



function zoo()
{
    $zoo = array(
        array("Perro", "León", "Conejo"),
        array("Gato", "Pato", "Canguro")
    );
    print "Elemento [1][1]: " . $zoo[1][1]; // Devuelve "Pato"
}

print "Funcion 7:" . "<br>";
zoo();
print "<br>";

function tablaAleatorios()
{
    $nombres = array("Carlos Álvarez", "Laura López", "Rosa Márquez", "Jorge Tiras");
    $materias = array("Lengua", "Historia", "Inglés", "Matemáticas");

    // Comenzamos la tabla
    print "<table border='1' cellspacing='0' cellpadding='5' style='border-collapse: collapse; text-align: center;'>";

    // Cabecera
    print "<tr>";
    print "<th>Nombre</th>";
    foreach ($materias as $materia) {
        print "<th>$materia</th>";
    }
    print "</tr>";

    // Filas con notas
    foreach ($nombres as $nombre) {
        print "<tr>";
        print "<td><b>$nombre</b></td>"; 
        foreach ($materias as $materia) {
            $nota = rand(0, 10); 
            print "<td>$nota</td>";
        }
        print "</tr>";
    }

    print "</table>";
}

print "Funcion 8:" . "<br>";
tablaAleatorios();
print "<br>";