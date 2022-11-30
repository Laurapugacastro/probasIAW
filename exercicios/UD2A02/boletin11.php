<?php 
$numero = "TRES";
function unidad($numero){
    switch ($numero)
    {
        case 9:
        {
            $numero = "NUEVE";
            break;
        }
        case 8:
        {
            $numero = "OCHO";
            break;
        }
        case 7:
        {
            $numero = "SIETE";
            break;
        }       
        case 6:
        {
            $numero = "SEIS";
            break;
        }       
        case 5:
        {
            $numero = "CINCO";
            break;
        }       
        case 4:
        {
            $numero = "CUATRO";
            break;
        }       
        case 3:
        {
            $numero = "TRES";
            break;
        }       
        case 2:
        {
            $numero = "DOS";
            break;
        }       
        case 1:
        {
            $numero = "UN";
            break;
        }       
        case 0:
        {
            $numero = "";
            break;
        }       
    }
    return $numero;  
    echo "el numero " . $numero ; 
}
?>