<?php
       function encherarray($numElem) 
       {
        $array = [];
        for ($i = 0; $i < $numElem; $i++) {
                $array[$i] = rand(1,10);
        }
                return $array;
       }
$array = encherarray(9);
print_r($array);

?>