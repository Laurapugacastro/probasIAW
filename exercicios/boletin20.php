<?php
$precioSI = '50';
$IVA = '0.21';
$costef = $precioSI + ($precioSI * $IVA);
$totalIVA = ($precioSI * $IVA);

echo "El precio sin Iva es de " . $precioSI . " y el precio con IVA es de  " . $costef;
echo "</br>";
echo "El porcentaje de IVA es de 21% del precio sin Iva " . $totalIVA;


?>