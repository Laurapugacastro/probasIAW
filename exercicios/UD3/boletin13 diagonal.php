<?php
    $matriz1 = array(
        array (2,0,1),
        array (3,0,0),
        array (5,1,1)
    );
    foreach ($matriz1 as $posFila => $fila) {
        foreach ($fila as $poscol => $valor) {
            $transposta [$poscol][$posFila] = $valor;
        }
    }
    print_r($matriz1);


?>