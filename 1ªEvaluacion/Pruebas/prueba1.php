<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include 'libreria.php'
    ?>
    <title>Asignaturas 2ºDAM</title>
</head>
<body>
    <h1>ASIGNATURAS 2º DAM</h1>
    <?php
        $asignaturas = ["SGE", "Acesso a datos", "Afondamento"];
        print "<ol>";
            for ($i = 0; $i < count($asignaturas); $i++) { 
                print "<li>";
                    print $asignaturas[$i];
                print "</li>";
            }
        print "</ol>";

        echo sumar(2, 2);
    ?>
    
</body>
</html>