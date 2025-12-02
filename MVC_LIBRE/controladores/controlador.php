<?php

require_once '../modelos/modelo.php';

$usuario = new Usuario();
$result = $usuario -> getUsuario();

require_once '../vistas/vista.php';