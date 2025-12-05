<?php
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    require_once '../modelos/modelo.php';

    $usuario = new Usuario();
    $dato = $usuario -> editar($_GET['id']);

    require_once '../vistas/vistaEditar.php';
}