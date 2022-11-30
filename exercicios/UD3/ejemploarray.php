<?php
$notas["alum1"] = [6,  6,  7];
$notas["alum2"] = [0 => 6, 1 => 6, 2 => 10];

foreach ($notas as $alumno => $notasA) {
    echo "o alumno" . $alumno . "es as seguintes notas";
    echo "<ul>";
    foreach ($notasA as $modulo => $nota) {
       echo "<li>$modulo = $nota </li>";
    }
    echo "</ul>";
    echo "</br>";
}
$notas[0] = [6, 6, 7];
$notas[1] = [0 => 6, 1 => 6, 2 => 10];
    for ($i = 0; $i < count($notas); $i++){
      for ($j = 0; $j < count($notas[$i]); $j++) {
        echo $notas[$i][$j];
     }
    echo "</br>";
}
?>