<?php
/*function ecadrada($array)
{
    $rdo = false;
    if (count($array) > 0) {
        if (count($array) == count($array[0])) {
        $rdo = true;
        }
      }
      return $rdo;
}
*/
/*
function cmatrizIdentidade($tamaño) {
    for ($i = 0; $i < $tamaño; $i++){
        for ($j = 0; $j < $tamaño; $j++){
            if ($i == $j) {
                $array[$i][$j] = 1;
            } else {
                $array [$i][$j] = 0;
            }
        }
    }
    return $array;
}

function cmatrizdiagonal($tamaño) {
    $array = [];
    if (is_integer($tamaño) && ($tamaño > 0))
    for ($i = 0; $i < $tamaño; $i++) {
        for ($j = 0; $j < $tamaño; $j++){
            if ($i == $j) {
                $array[$i][$j] = rand(1,9);
            } else {
                $array [$i][$j] = 0;
            }
        }
    }
    return $array;
}

print_r(cmatrizIdentidade(5));

function obterTransposta($array){
    $transposta = [];
    if (is_array($array)) {
        foreach ($array as $posFila => $fila) {
            foreach ($fila as $poscol => $valor) {
                $transposta [$poscol][$posFila] = $valor;
            }

       }
    } return $transposta;

}
*/
function eSimetrica($array){
     $coinciden = true;  
       $posFila = 0; 
       $transposta = obterTransposta($array);
            while ($coinciden && ($posFila < count($array))) {
                $poscol = 0;
                while ($coinciden && ($poscol < count($array[$posFila]))){
                    if($array[$poscol][$posFila] != $transposta[$posfila][$poscol]) { 
                        $coinciden = false;
                      }
                      $poscol++;
                }
                $posFila++;
            }
    
    return $coinciden;
}
$matriz1 = array(
    array (2,0,1),
    array (3,0,0),
    array (5,1,1)
);
echo eSimetrica($matriz1);


?>