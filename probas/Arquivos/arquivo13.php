<?php
$a=1;
$b=2;

function suma()
{

   // $b = $GLOBALS['a'] + $GLOBALS['b']; se define una variable local
   $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
}

suma ();
echo $b;
?>