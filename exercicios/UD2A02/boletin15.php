<?php
            $N = 60;
            $n = 1;
            $c = 0;
            do {
                if($n % 5 == 0){   
                    $c = $c + 1;
                }
                $n = $n + 1;
            } while ($n < $N);
            echo "La cantidad de múltiplos de 5 es ". $c. "." ;
?>