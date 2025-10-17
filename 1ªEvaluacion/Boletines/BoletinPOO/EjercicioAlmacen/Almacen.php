<?php

interface Almacen{
    
    function calcularPrecio($matriz);

    function precioMarca($matriz);
    
    function precioEstanteria($matriz);
    
    function AgregarProducto($matriz);
    
    function eliminarProducto($matriz);
    
    function mostrar($matriz);
}