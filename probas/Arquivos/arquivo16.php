<?php
    //uso de isset (isset devuelve si la variable es diferente de null)
    $variable=78;
    if (isset($variable)) {
            echo "Variable definida con valor $variable";
            $color="azul";
        }
        else{
            echo "Variable non definida "; 
        }
        echo "tengo una camiseta $color";

    
?>