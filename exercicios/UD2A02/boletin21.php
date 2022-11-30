
<?php

                
                $n = 5;
                $div = 2;
                while($div < $n) {
                    if(($n % $div) == 0) {
                        $boolean = True;
                        break;
                    } else {
                        $div++;
                    }       
                }
                if ($boolean) {
                    echo "El número ". $n . " no es primo.";
                } else {
                    echo "El número ". $n . " es primo.";
                }
            


/*
                $n = 5;
                $cont = 0;
                for($i = 1; $i <= $n; $i++){
                    if($n % $i == 0){
                        $cont++;
                    }
                }
                if($cont == 2){
                    echo "El número ". $n . " es primo.";
                } else{
                    echo "El número ". $n . " no es primo.";
                }
       */  
?>

