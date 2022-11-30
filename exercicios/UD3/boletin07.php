<?php
$i = 1;
$suma = 0;
if (empty($array)) {
    echo "no hay notas";
} else {
    echo "<table>
    <tr><td></td><th>Notas</th>";
    foreach ($array as $valor) {
       if($i % 2 != 0){
        echo "<tr style = background-color: grey'>";
        }else{
              echo "<tr>";
            echo "<th>"
        $suma += $valor;
    }
}

    $media = $suma / count($array);
    echo "<tr>
    <th>Total</th>
    <td> " . round($media,2) . " </td>
     </tr>";
     echo "</table>";
}
 

?>