<?php
if ((isset($_POST['nombre'])) && ($_POST['nombre'] != '') && (isset($_POST['apellidos']))  && ($_POST['apellidos'] != '') && (isset($_POST['edad'])) && ($_POST['edad'] != '') && (isset($_POST['tlf'])) && ($_POST['tlf'] != '')) {
    //llamada al modelo
    require_once '../modelos/modelo.php';
    $usuario = new Usuario();
    $dato = $usuario->actualizar($_POST['id'], $_POST['nombre'], $_POST['apellidos'], $_POST['edad'], $_POST['tlf'], $_POST['imagen']);
    if ($dato) {
        echo "<p style=\"color:green;\">El usuario se ha actualizado correctamente</p>";
    } else {
        echo "<p style=\"color:red;\">El usuario no se ha actualizado</p>";
    }
    echo "<br> <a href=../index.php</a>";

} else if (move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta)) {
    $usuario = new Usuario();
    $ruta_final = str_replace("../", '', $ruta);
    $dato = $usuario->actualizar($_POST['id'], $_POST['nombre'], $_POST['apellidos'], $_POST['edad'], $_POST['tlf'], $ruta_final);
    if ($dato) {
        echo "<p style=\"color:green;\">El usuario se ha actualizado correctamente</p>";
    } else {
        echo "<p style=\"color:red;\">El usuario no se ha podido actualizar</p>";
    }
    echo "<br> <a href=../index.php</a>";
}
