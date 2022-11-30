<?php
          $n = 1785;
          $i = 0;
          $n1 = $n;
          while ($n <> 0) {
            $r = $n % 10;
            $n = floor ($n / 10);
            $i = ($i * 10) + $r;
          }
          echo "El inverso de ". $n1 . " es " . $i. ".";
?>