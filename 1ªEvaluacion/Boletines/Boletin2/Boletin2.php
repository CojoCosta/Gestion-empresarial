<?php
function reemplazar(){
    $cadena = "abordaje";
    print str_replace("bord", "almi", $cadena);
}
print "Función 1: ";
print reemplazar() . "<br>";

function contarLetras($frase, $letra){
    $contador = 0;
    $longitud = strlen($frase);
    for($i = 0; $i < $longitud; $i++){
        if($frase[$i] == $letra){
            $contador++;
        }
    }
    return $contador;
}
print "Función 2: ";
print contarLetras("Fui a comprar platanos", 'a') . "<br>";

function validarContraseña($contraseña){
    $primerCaracter = $contraseña[0];
    return ((strlen($contraseña) >=8 && strlen($contraseña) <=12) && ($primerCaracter >= 0 && $primerCaracter <=9)) ? "Válida" : "No válida";
}
print "Función 3: ";
print validarContraseña("diego") . "<br>";
print validarContraseña("diego1234") . "<br>";
print validarContraseña("1234diego") . "<br>";

function numerosPares(){
    for ($i=0; $i <= 10; $i+2) { 
        return $numerosPares[$i] = $i;
    }
}
print "Función 4: ";
print numerosPares() . "<br>";

function mesesComM(){
    $meses=array('enero','febrero','marzo','abril', 'mayo','junio', 'julio','agosto', 'septiembre', 'octubre', 'noviemnbre', 'diciembre');
    
}
print "Función 5: ";
print mesesComM() . "<br>";
?>