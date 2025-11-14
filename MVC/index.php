<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de inscripcion empleado</title>
    <?php
    if ((isset($_POST['nombre'])) && ($_POST['nombre'] != '') && (isset($_POST['apellidos'])) && ($_POST['apellidos'] != '') && (isset($_POST['telefono'])) && ($_POST['telefono'] != '') && (isset($_POST['departamento'])) && ($_POST['departamento'] != '')) {
        //llamada al moddelo logico
        require_once 'modelos/modelo.php';

        $directorio = "imagenes/" .
        $nombre_imagen = basename($_FILES['imagen']['name']);
        $rutaImagen = $directorio . $nombre_imagen;
        if (move_uploaded_file($_FILES['imagen']['tmp_name'], $rutaImagen)) {
            //crear objeto
            $empleado = new Empleado();
            //Booleana
            $resultadoConsulta = $empleado->setEmpleado($_POST['nombre'], $_POST['apellidos'], $_POST['telefono'], $_POST['departamento'], $rutaImagen);
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
    <h1>Formulario de inscripcion del empleado</h1>
    <div id=formulario>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data" class="formulario">
            <table>
                <tr>
                    <td>Nombre: </td>
                    <td><input type="text" name="nombre" id="nombre"></td>
                </tr>
                <tr>
                    <td>Apellidos: </td>
                    <td><input type="text" name="apellidos" id="apellidos"></td>
                </tr>
                <tr>
                    <td>Telefono: </td>
                    <td><input type="tel" name="telefono" id="telefono"></td>
                </tr>
                <tr>
                    <td>Departamento: </td>
                    <td><input type="text" name="departamento" id="departamento"></td>
                </tr>
                <tr>
                    <td>Imagen: </td>
                    <td><input type="file" name="imagen" id="imagen"></td>
                </tr>
                <tr>
                    <td><input colspan="2" type="submit" value="Crear empleado"></td>
                </tr>
            </table>
        </form>
    </div>
    <hr>
    <a href="controladores/controlador.php">Listar empleados</a>
</body>

</html>