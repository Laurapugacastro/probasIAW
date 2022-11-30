<?php
          $Numero = 20;
          $numero = 9;
          $par = 0;
          $impar = 0;
          for ($i = $numero; $i <= $Numero; $i++) {
            if ($numero % 2 == 0) {
                $par = $par + $numero;
            } else {
                $impar = $impar + $numero;
            }
            $numero = $numero + 1;  
          }
          echo "La cantidad de pares es: ". $par. ".</br>";
          echo "La cantidad de impares es: ". $impar. ".</br>";
?>
