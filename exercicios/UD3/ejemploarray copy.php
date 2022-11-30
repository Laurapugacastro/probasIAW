<?php
$notas["alum1"] = ["eie" => 6, "asxbd" => 6, "seg" => 10];
$notas["alum2"] = ["asxbd" => 6, "seg" => 6, "aso" => 7, "iaw" => 8];

foreach ($notas as $alumno => $notasA) {
    echo "o alumno" . $alumno . "es as seguintes notas";
    echo "<ul>";
    foreach ($notasA as $modulo => $nota) {
       echo "<li>$modulo = $nota </li>";
    }
    echo "</ul>";
    echo "</br>";
}
?>