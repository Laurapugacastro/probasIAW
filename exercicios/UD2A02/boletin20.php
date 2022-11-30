<?php
            $numeroM = 8;
            $r1 = 9;
            $r2 = 80;
            $cont = 0;
            if ($r1 <= $r2) {
                for($i = $r1; $i <= $r2 ;$i++){
                    if($i % $numeroM == 0){
                        $cont = $cont + 1;
                    }
                }
                echo "En el rango entre ". $r1. " y ". $r2. ", hay ". $cont. " múltiplos de ". $numeroM. ".";   
            } 
?>