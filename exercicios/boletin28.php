<?php
$num ="29876";
$metros = (integer($num / 1000));
$resto = $num % 1000;
$decimetros = (integer) ($num / 100);
$resto = $num % 100;
$centrimetro = (integer) ($num / 10);
$resto = $num % 10;

echo 'Milimetros: '. $milimetros .' Centrimetros: '. $centimetros . " Decimetros " . $decimetros . " Metros" . $metros;
?>