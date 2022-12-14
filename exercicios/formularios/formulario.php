<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pruebas de formularios</title>
</head>
<body>

    <h1>Pruebas de formularios</h1>

    <form action="procesar.php" method="get">
        <p>Usuario: <input type="text" name="nome"/></p>
        <label>Usuario: <input type="text" name="nome"/></label> <!--Con Label, si pinchamos en el nombre, nos mete en el campo de escritura-->
        <br><br>

        <label>Baloncesto<input type="checkbox" name="deporte" value ="balon"></label>
        <label>Futbol<input type="checkbox" name="deporte" value ="futbol"></label>
        <label>Maior <input type="radio" name="idade" value= "maior" checked="checked"/></label>
        <label>Menor <input type="radio" name="idade" value="menor"/></label>
        <?php
        include 'datos.php';
        echo "<label>Tipo de Usuario <select name='tipouser'>";
        foreach ($tipos as $fila) {
            echo " <option value='" .$fila[0]. "'>" .$fila[1]."</option>";
        }
        echo "</select></label>";
        ?>

        <input type="submit" name="ENVIAR" value="enviar"/>
    </form>
    
</body>
</html>