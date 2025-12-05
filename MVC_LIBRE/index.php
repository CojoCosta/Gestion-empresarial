<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <style>
        body {
            font-family: "Poppins", Arial, sans-serif;
            background: linear-gradient(135deg, #8cd2f4, #2a69ac, #8cd2f4);
            background-size: 300% 300%;
            animation: fondoMovimiento 12s ease infinite;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            color: #fff;
        }

        @keyframes fondoMovimiento {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        h2 {
            margin-top: 40px;
            font-size: 32px;
            font-weight: 700;
            text-shadow: 0 2px 8px rgba(113, 210, 248, 0.25);
        }

        .formulario {
            background: rgba(255, 255, 255, 0.95);
            padding: 30px 40px;
            margin-top: 20px;
            border-radius: 18px;
            width: 320px;
            display: flex;
            flex-direction: column;
            gap: 18px;
            box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.25);
            color: #333;
            backdrop-filter: blur(5px);
            animation: entrada 0.8s ease;
        }

        @keyframes entrada {
            from {
                transform: translateY(40px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .formulario input[type="text"],
        .formulario input[type="number"],
        .formulario input[type="tel"],
        .formulario input[type="file"] {
            padding: 12px;
            border: 2px solid #b8d9f0;
            border-radius: 12px;
            font-size: 15px;
            transition: 0.25s;
            background: #fff;
        }

        .formulario input[type="text"]:focus,
        .formulario input[type="number"]:focus,
        .formulario input[type="tel"]:focus,
        .formulario input[type="file"]:focus {
            border-color: #2a69ac;
            box-shadow: 0 0 10px rgba(42, 105, 172, 0.5);
        }

        .formulario input[type="submit"] {
            padding: 14px;
            border-radius: 12px;
            border: none;
            cursor: pointer;
            font-size: 17px;
            font-weight: 700;
            color: white;
            background: linear-gradient(45deg, #8cd2f4, #2a69ac, #ffffffff);
            background-size: 200% 200%;
            animation: botonMovimiento 4s ease infinite;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
            transition: 0.3s;
        }

        @keyframes botonMovimiento {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        .formulario input[type="submit"]:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.35);
        }

        a {
            margin-top: 25px;
            font-size: 18px;
            font-weight: 600;
            color: #fff;
            text-shadow: 0 2px 8px rgba(0, 0, 0, 0.25);
            text-decoration: none;
            transition: 0.3s;
        }

        a:hover {
            color: #e8f7ff;
            text-shadow: 0 4px 12px rgba(0, 0, 0, 0.4);
        }

        p {
            font-size: 18px;
            font-weight: bold;
            text-align: center;
            margin-top: 15px;
        }
    </style>
    <?php
    if ((isset($_POST['nombre'])) && ($_POST['nombre'] != '') && (isset($_POST['apellidos']))  && ($_POST['apellidos'] != '') && (isset($_POST['edad'])) && ($_POST['edad'] != '') && (isset($_POST['tlf'])) && ($_POST['tlf'] != '')) {
        //llamada al moddelo logico
        require_once 'modelos/modelo.php';

        $directorio = "imagenes/";
        $nombre_imagen = basename($_FILES['imagen']['name']);
        $rutaImagen = $directorio . $nombre_imagen;
        if (move_uploaded_file($_FILES['imagen']['tmp_name'], $rutaImagen)) {
            //crear objeto
            $usuario = new Usuario();
            //Booleana
            $resultadoConsulta = $usuario->setUsuario($_POST['nombre'], $_POST['apellidos'], $_POST['edad'], $_POST['tlf'], $rutaImagen);
            if ($resultadoConsulta) {
                echo "<p style=\"color:green\">El usuario se ha añadido correctamente</p>";
            } else {
                echo "<p style=\"color:red\">El usuario no se ha añadido</p>";
            }
        }
    }
    ?>
</head>

<body>
    <h2>Registro de usuario</h2>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data" class="formulario">
        <input type="text" name="nombre" id="nombre" placeholder="Nombre"><br>
        <input type="text" name="apellidos" id="apellidos" placeholder="Apellidos"><br>
        <input type="number" name="edad" id="edad" placeholder="Edad"><br>
        <input type="tel" name="tlf" id="tlf" placeholder="Telefono"><br>
        <input type="file" name="imagen" id="imagen"><br>
        <input type="submit" value="Crear cuenta">
    </form>
    <a href="controladores/controlador.php">Lista usuarios</a>
</body>

</html>