<?php
$tipo = 'x';
$pago = 'P';
$compra = 95;
$tipo = strtolower($tipo);
$pago = strtoupper($pago);
$correcto = true;
$erro = 0;
switch ($tipo) {
    case 'x':
        switch (strtoupper($pago)) {
            case 'C':
               $cargo = -0.15;
                break;
            case 'P':
                $cargo = -0.10;
                break;
                default:
                $erro = 2;
                break;
        }
     
    break;

    case 'a':
        switch (strtoupper($pago)) {
            case 'C':
                $cargo = -0.20;
                break;
            case 'P':
                $cargo = -0.05;
                break;
                default:
                $erro = 2;
                break;
        }
    break;             
        default:
       $erro = 1;
        break;
        } 
        if ($erro == 0) { 
        echo " tes que pagar" . ($compra + ($compra * $cargo)) . ;
        } elseif ($erro == 1) { 
            echo " o parametro tipo incorrecto " . $compra;
         } else  { 
             echo " o parametro pago incorrecto " . $compra;
        };



?>