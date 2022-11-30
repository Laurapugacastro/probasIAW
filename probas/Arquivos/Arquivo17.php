<?php
    $num=2;
    $cadea="calculadora";

    if (is_numeric($num)){
        echo "<p>A variable num é númerica</p>\n";

    } else {
        echo "<p>A variable num non é númerica</p>\n";
    }

    $tipo=settype($num );
    echo "<p>tipo de dato de num: " . $tipo . "</p>\n";

    if (is_numeric($cadea )){
        echo "<p>A variable num é númerica</p>\n";

    } else {
        echo "<p>A variable num non é númerica</p>\n";
    }

    echo "<p>tipo de dato de cadea: " . settype($tipo ) . "</p>\n";
?>
