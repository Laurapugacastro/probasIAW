<?php
   $grados_Fahrenheit = 60;
   const num = '32';
   const num1 = '0.55556';
   const num2 = '273.15';
    $grados_Celsius = ($grados_Fahrenheit - num) * num1;
    $grados_Kelvin = $grados_Celsius + num2;
    echo 'Valor de grados Celsius: ' . $grados_Celsius . "<br/>\n";
    echo 'Valor de grados Kelvin: ' . $grados_Kelvin . "<br/>\n";

    ?>