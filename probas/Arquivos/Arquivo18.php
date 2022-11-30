<?php

$cadea = "PUNTOS";
echo "Tipo: " . gettype($cadea);
if (settype($cadea, 'int')) {
    echo "Realizouse un cambio de tipo";
} else {
    echo "Non se realizou co cambio";
}
echo "valor despues del cambio: " . $cadea;
unset ($cadea);

?>