<?php
    $numero = $_GET['numero']; // Recogemos el número del formulario
    
    function esParImpar($numero, &$cuadrado) {
        if($numero % 2 == 0) { // Si es par
            $cuadrado = $numero * $numero;
            return true;
        } else { // Si es impar
            $cuadrado = $numero * $numero;
            return false;
        }
    }
    
    if(esParImpar($numero, $cuadrado))
        header("Location:par.php?numero=$numero&cuadrado=$cuadrado");
    else
        header("Location:impar.php?numero=$numero&cuadrado=$cuadrado");
?>