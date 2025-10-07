<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos formulario</title>
    <style>
        * {
            margin-left: 10px;
        }
    </style>

</head>

<body>
    <div id="datosSuscriptor">
        <h1>Datos del suscriptor:</h1><br>
        <?php
        $flag = true;
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            // NOMBRE 
            if (!isset($_POST['nombre']) || empty($_POST['nombre'])) {
                echo "<span style = \"color:red;\">El nombre es obligatorio</span><br>";
                $flag = false;
            } else {
                $nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            }
            // PRIMER APELLIDO 
            if (!isset($_POST['apellido1']) || empty($_POST['apellido1'])) {
                echo "<span style = \"color:red;\">El primer apellido es obligatorio</span><br>";
                $flag = false;
            } else {
                $apellido1 = filter_var($_POST['apellido1'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            }
            // SEGUNDO APELLIDO 
            if (!isset($_POST['apellido2']) || empty($_POST['apellido2'])) {
                echo "<span style = \"color:red;\">El segundo apellido es obligatorio</span><br>";
                $flag = false;
            } else {
                $apellido2 = filter_var($_POST['apellido2'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            }
            // EMAIL 
            if (!isset($_POST['correo']) || empty($_POST['correo'])) {
                echo "<span style = \"color:red;\">El correo es obligatorio</span><br>";
                $flag = false;
            } else {
                $correo = filter_var($_POST['correo'], FILTER_SANITIZE_EMAIL);
                if (!filter_var($_POST['correo'], FILTER_VALIDATE_EMAIL)) {
                    echo "<span style = \"color:red;\">El correo no es válido</span><br>";
                    $flag = false;
                }
            }
            // INTERES 
            if (!isset($_POST['interes']) || empty($_POST['interes'])) {
                echo "<span style \"color:red;\">Marque una opcionde interés</span><br>";
                $flag = false;
            } else {
                $interes = filter_var($_POST['interes'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            }
        }
        ?>
        </span>
    </div>
    <div id="datosSuscricion">
        <h1>Datos de la suscripción:</h1><br>
        <span id="suscripcion">

        </span>
    </div>
</body>

</html>