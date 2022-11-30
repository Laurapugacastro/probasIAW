<?php
$g = "general";
$a = "afiliado";
$c = "contado";
$p = "plazos";

switch ($tc) {
    case 1:
    echo "<p> . $g . e general</p>";
    break;

    case 2:
    echo " <p> . $a . e afiliado </p>";
    break;
    }
    
switch ($fp) {
    case 1:
    echo "<p> . $c . e contado</p>";
    break;

    case 2:
    echo " <p> . $p . e a plazos</p>";
    break;
    }

?>