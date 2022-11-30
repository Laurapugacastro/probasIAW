<?php
function foo()
{
    global $color;
    include 'arquivo08_varhs.php';
    echo "Unha $froita $color";
}

foo();
echo "Unha $froita $color";
?>