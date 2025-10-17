<?php

class Main extends Bebida implements Almacen{
    
    private $matriz = [4][4];

    function calcularPrecio($matriz){
        $acu = 0;
        for ($i=0; $i < $matriz[$i].ob_get_length(); $i++) { 
            for ($j=0; $j < $matriz[$j].ob_get_length(); $j++) { 
                acu += $matriz[$i][$j].getPrecio();
            }
        }
    }

    function precioMarca($matriz){
        
    }
    
    function precioEstanteria($matriz){
        
    }
    
    function AgregarProducto($matriz){
        
    }
    
    function eliminarProducto($matriz){
        
    }
    
    function mostrar($matriz){
        
    }
}