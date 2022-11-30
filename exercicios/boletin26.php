<?php
define ("LIBRAS","0.4535920");
define ("PES", "0.032808");
$nombre ='Pedro';
$peso = 120;
$estatura = 5 ;
$t_persona ='hombre';
$pesok = round($peso * LIBRAS,2);
$alturac = round($estatura / PES, 2);

$imc = round(($pesok)/pow(($alturac / 100), 2),2);

echo "El niño con nombre " .  $nombre;
echo "</br>";
echo "con un peso " . $pesok;
echo "</br>";
echo "con una estatura " . $alturac;
echo "</br>";
echo "tiene un imc de  " . $imc ;

?>
