<?php
          $r1 = 5;
          $r2 = 10;
          $c = 0;
          $n = 5;
          if ($r1 <= $r2) {
            while ($r1 <= $r2) {
                if ($r1 % 2 == 0) {
                    $c++;
                }
                $r1++;
            }
            echo "La cantidad de números pares del rango " . $n . " - " . $r2 . " es " . $c . ".";
          } else {
            echo "Rango incorrecto.";
          } 
?>