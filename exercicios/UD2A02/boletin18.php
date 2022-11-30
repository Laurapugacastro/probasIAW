<?php
          $n = 64;
          $n1 = $n;
          while ($n <> 0) {
            $r = $n % 10;
            $n = floor ($n / 10);
            $cubo = pow($r, 3);
            $cubosuma = ($cubosuma + $cubo);
          }
          if ($n1 == $cubosuma) {
            echo $n1 . " es un cubo perfecto.";
          } else {
              echo $n1 . " no es un cubo perfecto.";
          } 
?>