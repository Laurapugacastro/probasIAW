<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
         <?php
            $num1 = 45;
            $num2 = 2;

            $num1 += $num2;
            echo "<li> suma " . $num1;
            echo "</br>";

            $num1 -= $num2;
            echo "<li> resta " . $num1;
            echo "</br>";

            $num1 *= $num2;
            echo "<li> multiplicacion " . $num1;
            echo "</br>";

            $num1 /= $num2;
            echo "<li> division " . $num1;
            echo "</br>";

            $num1 %= $num2;
            echo "<li>el resto " . $num1;
            echo "</br>";

            $num = -55;
            echo " <li> el resto " . abs($num);
            echo "</br>";
            echo " <li> el resto " . $num;
            echo "</br>";
            echo " <li> lista   " . max(-55,-3,8,-22,9,0,0);
            echo "</br>";
            echo " <li> lista   " . abs(max(-55,-3,8,-22,9,0,0));
            echo "</br>";
            echo " <li>lista   " . max(abs(-55), abs(-3), abs(8), abs(-22), abs(9));
        ?>
    </ul>
</body>
</html>
