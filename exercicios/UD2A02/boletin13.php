<?php

$mes = 9;
$ano = 2020;

switch ($mes){
    case 1:
        echo "<p> El mes es enero tiene 31 días. </p>";
        break;
    case 2:
        if  (($ano % 4 == 0) || ($ano % 100 == 0) && ($ano % 400 == 0)) {
           echo "<p> el mes es febrero y tiene 29 días </p>"; 
        } else { echo "<p> el mes es febrero y tiene 28 días </p> ";}
        break;
    case 3:
        echo "<p> el mes es marzo y tiene 31 días </p>";
        break;
    case 4:
        echo "<p> el mes es abril y tiene 30 días </p>";
        break;
    case 5:
        echo "<p> el mes es mayo y tiene 31 días </p>";
        break;
    case 6:
        echo "<p> el mes es junio y tiene 30 días </p>";
        break;
    case 7:
        echo "<p> el mes es julio y tiene 31 días </p>";
        break;
    case 8:
        echo "<p> el mes es agosto y tiene 31 días </p>";
        break;
    case 9:
        echo "<p> el mes es septiembre y tiene 30 días </p>";
        break;
}
?>