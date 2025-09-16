<?php
    # variables locales y globales
    $dato1 = 36; //int
    $dato2 = 15.76; //float
    $dato3 = true; //boolean
    $dato4 = "clase"; //string
    $dato5 = array("Diego", 25, "alumno", true); //array unidimensional de indice
    
    print "El valor del dato 1 es: " . $dato1;  //concatenacion con . o , //
    echo "<br>";
    echo "El valor del dato 2 es: $dato2";  //concatenacion con . o , //
    echo "<br>";
    print var_dump($dato1); //nos dice que tipo de variable es y su valor
    echo "<br>";
    print "El valor del dato 2 es: {$dato2}"; 
    echo "<br>";
    
    
    //constantes y constantes de clase
    define("CONSTANTE1", "hola mundo");
    define("CONSTANTE2", array("diego", "pablo", "hugo"));
    
    echo CONSTANTE1;
    echo "<br>";
    print "El valor de la constante 2 es : " . CONSTANTE2[2];
    print "<br>";
    
    //Definimos una clase
    class Marca{
        const CONSTANTE3 = 5.3; //CONSTANTE DE CLASE
    }
    print Marca::CONSTANTE3; //uso del operador doble dos puntos (::)
    print "<br>";
    
    //Creamos una funcion para ver el uso de variables de funcion
    function mostrar(){
        //acceso a una variable global
        global $dato1; //variable de fuera de la funcion
        $dato6 = "variable de función"; //variable de una funcion
        return "El contenido de la variable dato1 es: $dato1, y el valor de la varible dato6 es: {$dato6}, " . $GLOBALS['dato2'];
    }
    print mostrar();
    print "<br>";



    //Arrays
    //Array unidimensional asociativo
    $array2 = array("nombre" => "David", "edad" => 37);
    foreach ($array2 as $nombre => $edad) {
        print $nombre." : ".$edad;
        print "<br>";
    }
    
    //Array bidimensional asociativo
    $array3=[
        "usuario1" => ["nombre" => "Italiani", "edad" => 37],
        "usuario2" => ["nombre" => "Hugo", "edad" => 22],
        "usuario3" => ["nombre" => "Diego", "edad" => 25]
    ];
    foreach ($array3 as $usuarios => $datos) {
        print $usuarios." : ";
        print "<br>";
        foreach ($datos as $nombre => $edad) {
            print $nombre." : ".$edad;
            print "<br>"; 
        }
        print "<hr>";
    }


    /*Librerias de funciones 
    y enlazarlas con el programa principal*/