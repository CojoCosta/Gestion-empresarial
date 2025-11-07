<?php 
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    require_once '../modelos/modelo.php';
    require_once '../vistas/vistaEditar.php';
    $empleado = new Empleado();
    $result = $empleado -> actualizar($_GET['id']);
    
}