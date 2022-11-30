<?php
        $vector1 = [2, 3, 4, 5];
        $vector2 = [6, 3, 2, 1];
       // $i = 0;
/*
        foreach ($vector1 as $clave => $valor){
              $total[$i] = $valor + $vector2[$clave]; 
             $i++;
             } 
      var_dump($total);
*/

if(count($vector1) == count($vector2)) {
      for ($i = 0; $i < count($vector1); $i++) {
            $resultado[] = $vector1[$i] + $vector2[$i];
      }
}
print_r($resultado);

$resultado = [];
if(count($vector1) == count($vector2)) {
      foreach ($vector1 as $clave => $valor) {
            $resultado[$clave] = $valor[$i] + $vector2[$clave];
      }
}
print_r($resultado);



?>