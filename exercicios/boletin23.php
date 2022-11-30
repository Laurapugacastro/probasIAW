<?php
$si = '25';
$no = '50';
$total = $si + $no;
$porcesi = $si / $total*100;
$porceno = $no / $total* 100;

echo "Los votos si " . $si;
echo "</br>";
echo "los votos no " . $no;
echo "</br>";
echo "total votos " . $total;
echo "</br>";
echo "el porcentaje de si " . $porcesi . "%"  ;
echo "</br>";
echo "el porcentaje de no " . $porceno . "%";

?>