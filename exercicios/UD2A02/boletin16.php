<?php
          $n = 8765;
          $n1 = $n;
          $c1 = 0;
          $p = 0;
          $r1 = 0;
          while ($n <> 0) {
            $r = $n % 10;
            $n = floor ($n / 10);
            if ($r % 2 == 0) {
                $p++;
            }
            if ($r1 <= $r) {
                $max = $r;
            }
            $r1 = $r;
            $c1++;
          }
          echo $n1 . " tiene " . $c1 . " dígitos.</br>";
          echo $n1 . " tiene " . $p . " dígitos pares.</br>";
          echo "El dígito mayor de ". $n1. " es ". $max. ".";
?>