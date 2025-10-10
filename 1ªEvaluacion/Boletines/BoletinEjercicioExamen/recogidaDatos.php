<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos de tu formulario</title>
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            margin: 20px;
        }

        span {
            color: red;
            display: block;
            font-family: 'Times New Roman', Times, serif;
        }

        h3 {
            margin-top: 25px;
        }

        b {
            display: block;
            margin-top: 5px;
        }
    </style>
</head>

<body>
    <h1>Datos recogidos:</h1>
    <br>

    <div id="datosSuscriptor">
        <h3>Datos del suscriptor:</h3>
        <?php
        $isChecked = true;

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            
            if (!isset($_POST['nombre']) || empty($_POST['nombre'])) {
                echo "<span>El campo nombre es obligatorio</span>";
                $isChecked = false;
            } else {
                $nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            }

            
            if (!isset($_POST['apellido1']) || empty($_POST['apellido1'])) {
                echo "<span>El campo primer apellido es obligatorio</span>";
                $isChecked = false;
            } else {
                $apellido1 = filter_var($_POST['apellido1'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            }

            
            if (!isset($_POST['apellido2']) || empty($_POST['apellido2'])) {
                echo "<span>El campo segundo apellido es obligatorio</span>";
                $isChecked = false;
            } else {
                $apellido2 = filter_var($_POST['apellido2'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            }

            
            if (!isset($_POST['correo']) || empty($_POST['correo'])) {
                echo "<span>El campo correo es obligatorio</span>";
                $isChecked = false;
            } else {
                if (!filter_var($_POST['correo'], FILTER_VALIDATE_EMAIL)) {
                    echo "<span>El formato del correo es incorrecto</span>";
                    $isChecked = false;
                } else {
                    $correo = filter_var($_POST['correo'], FILTER_SANITIZE_EMAIL);
                }
            }

            
            if (!isset($_POST['interes']) || empty($_POST['interes'])) {
                echo "<span>El campo interés es obligatorio</span>";
                $isChecked = false;
            } else {
                $interes = filter_var($_POST['interes'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            }
        }

        if ($isChecked) {
            echo "<p>Nombre: $nombre</p>";
            echo "<p>Primer Apellido: $apellido1</p>";
            echo "<p>Segundo Apellido: $apellido2</p>";
            if ($interes == "si") {
                echo "<p>Le enviaremos información relacionada con nuestras publicaciones al correo <b>$correo</b></p>";
            } else{
                echo "<p>No le enviaremos información relacionada con nuestras publicaciones al correo <b>$correo</b></p>";
            }
        }
        ?>
    </div>

    <div id="datosSuscripcion">
        <h3>Datos de la suscripción:</h3>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && $isChecked) {

            
            $revistasSeleccionadas = [];
            $revistas = [
                'national' => 'National Geographic',
                'electronic' => 'Electronic Letters',
                'conocer' => 'Conocer',
                'science' => 'Science',
                'desarrollo' => 'Desarrollo Web'
            ];

            foreach ($revistas as $clave => $valor) {
                if (isset($_POST[$clave])) {
                    $revistasSeleccionadas[] = $valor;
                }
            }

            if (empty($revistasSeleccionadas)) {
                echo "<span>No ha seleccionado ninguna revista</span>";
                $isChecked = false;
            }

            
            if (!isset($_POST['suscripcion']) || empty($_POST['suscripcion'])) {
                echo "<span>No ha indicado la forma de suscripción</span>";
                $isChecked = false;
            } else {
                $suscripcion = filter_var($_POST['suscripcion'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            }

            if ($isChecked) {
                echo "<p>Señor/a $apellido1. Estas son las publicaciones a las que se ha suscrito:</p>";
                foreach ($revistasSeleccionadas as $revista) {
                    echo "<b>$revista</b><br>";
                }

                $numRevistas = count($revistasSeleccionadas);

                if ($numRevistas == 1) {
                    $tarifas = ['semanal' => 10, 'mensual' => 30, 'anual' => 330];
                } elseif ($numRevistas == 2) {
                    $tarifas = ['semanal' => 15, 'mensual' => 50, 'anual' => 550];
                } else {
                    $tarifas = ['semanal' => 25, 'mensual' => 90, 'anual' => 990];
                }

                $tarifa = isset($tarifas[$suscripcion]) ? $tarifas[$suscripcion] : 0;

                echo "<p>Su tarifa $suscripcion es de $tarifa euros</p>";
            }
        }
        ?>
    </div>

</body>

</html>