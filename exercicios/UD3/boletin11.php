<?php
$multiple3[0] = [3,6,9,12];
$multiple3[1] = [3,6,9,12];
$multiple3[2] = [3,6,9,12];
$multiple3[3] = [3,6,9,12];
$multiple3[4] = [3,6,9,12];
$multiple3[5] = [3,6,9,12];
$multiple3[6] = [3,6,9,12];

echo "<table border=1>
    <tr><th colspan=4>Multiplos</th></tr>";
foreach ($multiple3 as $numero) {
echo "<tr>";
    foreach ($numero as $fila) {
         echo "<td>". $fila ."</td>";
    }
  echo "</tr>";
  echo "</br>";
   
}



?>