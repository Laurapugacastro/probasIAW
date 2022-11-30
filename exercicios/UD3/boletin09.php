<?php
       function encherarray($numElem) 
       {
        $array = [];
        for ($i = 0; $i < $numElem; $i++) {
                $array[$i] = rand(1,10);
        }
                return $array;
       }
$array = encherarray(40);
$cont = 0;
foreach ($array as $indice => $value) {
    echo  $value . "" ;
    $cont++;
    if(($value + 1) % 10 == 0) {
        echo "</br>";
    }
}

?>