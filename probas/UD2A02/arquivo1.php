<?php
    $num = rand(1,10);
    echo "<p> Num: " . $num ."</p>\n";
    if (($num % 2) == 0) {
        echo "<p> Tocouche un numero par </p>\n";
    } else {
        echo "<p> Tocouche un numero impar </p>\n";
    }
    
    echo (($num % 2) == 0) ? "<p> Tocouche un numero par </p>\n" :  "<p> Tocouche un numero impar </p>\n";
    echo "<p> outras liñas </p>\n";
?>