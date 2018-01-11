<?php
    function Errores($mensaje, $error){
        $hoy = date("F j, Y, g:i a");  // March 10, 2001, 5:16 pm
        $error_base = $mensaje . " - Error: " . $error . " Fecha: " . $hoy;
        return $error_base;
    }

    function Valores($Fila, $Columna){
        return $Fila * $Columna;
     }
?>