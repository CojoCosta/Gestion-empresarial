<?php
require_once 'Traits.php';
class Comunicacion{
    use Saludar,Despedir;
}
$comunicacion = new Comunicacion();
$comunicacion->decirHola().$comunicacion->sayBye();
?>