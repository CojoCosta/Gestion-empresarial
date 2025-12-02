<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <?php
    if ((isset($_POST['nombre'])) && ($_POST['nombre'] != '') && (isset($_POST['apellidos']))  && ($_POST['apellidos'] != '') && (isset($_POST['edad'])) && ($_POST['edad'] != '') && (isset($_POST['telefono'])) && ($_POST['telefono'] != '')) {
        //llamada al moddelo logico
        require_once 'modelos/modelo.php';

        $directorio = "imagenes/" .
        $nombre_imagen = basename($_FILES['imagen']['name']);
        $rutaImagen = $directorio . $nombre_imagen;
        if (move_uploaded_file($_FILES['imagen']['tmp_name'], $rutaImagen)) {
            //crear objeto
            $usuario = new Usuario();
            //Booleana
            $resultadoConsulta = $usuario->setUsuario($_POST['nombre'], $_POST['apellidos'], $_POST['edad'],$_POST['telefono'], $rutaImagen);
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
        <input type="file" name="foto" id="foto"><br>
        <input type="submit" value="Crear cuenta">
    </form>
    <a href="controladores/controlador.php">Lista usuarios</a>
</body>

</html>