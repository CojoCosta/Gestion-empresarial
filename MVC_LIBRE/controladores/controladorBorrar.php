<?php 
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    require_once '../modelos/modelo.php';

    $usuario = new Usuario();
    $flag = $usuario -> borrar($_GET['id']);

    if ($flag) {
        echo "<p style=\"color:green\">Usuario eliminado </p>";
        echo "<br><a href=../index.php>Vuelve</a>";
    } else{
        echo "<p style=\"color:red\">Usuario No existente </p>";
        echo "<br><a href=../index.php>Vuelve</a>";
    }
}