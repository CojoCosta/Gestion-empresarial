<?php
//array datos
$libros = [
    ["titulo" => "Cien años de soledad", "autor" => "Garcia Marquez", "categoria" => 0],
    ["titulo" => "Sapiens", "autor" => "Yuhal", "categoria" => 1],
    ["titulo" => "CR7", "autor" => "El bicho", "categoria" => 2],
    ["titulo" => "300", "autor" => "Alguien", "categoria" => 3]
];

//FUNCION INTERMEDIA
function infoLibro($libro){
    return [
        "titulo_completo" => strtoupper($libro['titulo']),
        "autor" =>  $libro['autor'],
        "longitud_titulo" => strlen($libro['titulo'])
    ];
}

print "<h1><em>Libros de mi biblioteca</em></h1>";
print "<br>";

//bucle para recorrer mis libros
$contador = 0;

while ($contador < count($libros)) {
    $info = infoLibro($libros[$contador]);
    print "Título: {$info['titulo_completo']}, autor: {$info['autor']}, longitud del título: {$info['longitud_titulo']}";
    print "<br>";
    $contador ++;
}

print "<br>";

function filtroCategoria($tipo){
    global $libros;
    switch($tipo){
        case 0:
            $genero = 'Narrativa';
            break;
        case 1:
            $genero = 'Historico';
            break;
        case 2:
            $genero = 'Leyenda';
            break;
        case 3:
            $genero = 'Mierda';
            break;
        default:
            $genero = "Ninguno";
    }
    print "Los libros con el genero $genero encontrados son: ";
    print "<br>";

    // $resultado = array();//array vacio
    $resultado = [];//array vacio

    foreach ($libros as $indice => $libro) {
        foreach ($libro as $columna => $valor) {
            if ($columna == "categoria" && $valor == $tipo) {
                $resultado[] = $libro['titulo'];
            }
        }
    }
    return $resultado;
}
print "<h3><em>Filtro por categoria</em></h3>";
print "<br>";

$arrayfinal = filtroCategoria(2);
print_r($arrayfinal);

?>