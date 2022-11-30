<?php
$tipo = 'c';
$pago = 'p';
$compra = 95;
$tipo = strtolower($tipo);
$pago = strtoupper($pago);
$correcto = true;
$erro = 0

switch ($tipo . $pago) {
        case 'c':
             $compra = $compra - ($compra * 0.15);
            break;
        case 'p':
                $compra = $compra + ($compra * 0.10);
                break;
        case 'c':
             $compra = $compra - ($compra * 0.2);
             break;
        case 'p':
             $compra = $compra + ($compra * 0.05);
            break;
            default:
            echo "introduciches un parametro incorrecto";
            $correcto = false;               
}
if($correcto){
echo "tes que pagar " . $compra;
}

?>