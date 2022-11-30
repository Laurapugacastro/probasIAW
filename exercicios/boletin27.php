<?php
$altura = floatval (9);
$radio = floatval (3);
$volumen = M_PI * ($radio ** 2) * $altura;
$area = 2.0 * M_PI * $radio * ($radio + $altura);
echo 'Valor de altura: ' . $altura . "<br/>\n";
echo 'Valor de radio: ' . $radio . "<br/>\n";
echo 'Valor de area: ' . $area . "<br/>\n";
echo 'Valor de volumen: ' . $volumen . "<br/>\n";
echo "M_PI " . M_PI;

?>