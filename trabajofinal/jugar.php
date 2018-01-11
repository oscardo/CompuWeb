<?php
include "logger.php";
//primera estructura de control aprendida if
if(isset($_POST['Columnas']) && isset($_POST['Filas'])){
    
    $Col = (integer)$_POST['Columnas'];
    $Fil = (integer)$_POST['Filas'];
    $grosor = (integer)$_POST['Grosor']; 
     $color_favorito = $_POST['color_favorito'];
     $tipo_letra = $_POST['tipoletras'];
     
     //termario 
     $grosor = ($grosor < 0) ? $grosor * -1 : $grosor;

     echo "Color: " . $color_favorito . "<br />";
     echo "Tipo de Letra: " . $tipo_letra . "<br />";
     echo "Grosor de la linea: " . $grosor . "<br />";
     $PosibleCombinaciones = Valores($Fil,$Col);
     echo "Posibilidades: " . (string)$PosibleCombinaciones . "<br/><hr/><br/>";
     
     echo "<table align='center' face='". $tipo_letra ."' border='". $grosor ."' bgcolor='". $color_favorito ."'>";
     //segunda estructura de control for
     for($i = 1; $i <= $Col; $i++){
        echo "<tr>";
        for($j = 1; $j <= $Fil; $j++){
            echo "<td>";     
            echo $i * $j;
            echo "</td>";
        }
        echo "</tr>";
     }
     echo "</table>";
    }

    else{
        $error = "1";
        $mensaje = "Ha tratado de ingresar de manera inesperada: ";
        debug_zval_dump(Errores($mensaje, $error));
        
        //debe quitar los comentarios para saltar el mensaje de error
        // $url = "juego.php";
        // echo '<script>window.location.href="' . $url . '";</script>';
    }
?>