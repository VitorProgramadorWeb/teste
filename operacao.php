<?php
    $x = $_GET['x'];
    $y = $_GET['y'];

    // Se não tiver entrada
    if($x == null) {
        $x = 0;
    }
    if($y == null) {
        $y = 0;
    }

    $operador = $_GET['operador'];
    $resultado;

    if($operador == "soma") {
        $resultado = $x + $y;
    } else if($operador == "subtracao") {
        $resultado = $x - $y;
    }else if($operador == "multiplicacao") {
        $resultado = $x * $y;
    } else if($operador == "divisao") {
        if($y != 0) {
            $resultado = $x / $y;
        } else {
            $resultado = "inválida";
        }
    }

    echo "A $operador de $x e $y é $resultado"
?>