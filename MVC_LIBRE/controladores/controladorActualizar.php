<?php
if ((isset($_POST['nombre'])) && ($_POST['nombre'] != '') && (isset($_POST['apellidos']))  && ($_POST['apellidos'] != '') && (isset($_POST['edad'])) && ($_POST['edad'] != '') && (isset($_POST['telefono'])) && ($_POST['telefono'] != '')) {
    //llamada al modelo
    require_once '../modelos/modelo.php';
    $usuario = new Usuario();
    $result = $usuario->actualizar($_POST['id'], $_POST['nombre'], $_POST['apellidos'], $POST['$edad'], $_POST['telefono'], $_POST['imagen']);
    if ($result) {
        echo "<p style=\"color:green;\">El usuario se ha actualizado correctamente</p>";
    } else {
        echo "<p style=\"color:red;\">El usuario no se ha actualizado</p>";
    }
    echo "<br> <a href=../index.php</a>";
}
