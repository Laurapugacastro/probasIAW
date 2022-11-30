<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $var = false;
        $num1 = 38;
        $num2 = 5;
        $rdo = $num1 + $num2++;
       /* echo "<p>" . (($num1 === $num2)?("son iguais"):("son diferentes")) . "</p>";
        echo  ($num1 == $num2)?($num1 + $num2):($num1 - $num2);*/
        echo "<p> $rdo </p>\n";
        echo "<p> $num2 </p>\n";



    ?>
</body>
</html>