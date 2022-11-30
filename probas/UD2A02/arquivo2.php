<?php
  $num = rand(1,20);
  switch ($num) {
    case 1:
     $texto = "un";
     break;
    case 2:
     $texto = "dos";
     break;
    case 3:
      $texto = "tres";
     break;
    case 4:
      $texto = "catro";
     break;
    case 5:
       $texto = "cinco";
      break;
    case 6:
     $texto = "seis";
     break;
    case 7:
     $texto = "sete";
     break;
    case 8:
      $texto = "oito";
     break;
    case 9:
     $texto = "nove";
     break;
    case 10:
      $texto = "dez";
      break;

    default:
    $texto = "indefinido";
  }
  echo "o numero: " . $num . " ten como texto: " . $texto;


?>