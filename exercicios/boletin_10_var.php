<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 
    'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
    <html xmlns='http://www.w3.org/1999/xhtml'> 
    <head>    
        <title>MODULO IAW </title>
        <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />   
        <link href='plantilla.css' rel='stylesheet' type='text/css' media='screen'/>     
      </head>  
<body>    
<?php
    $nombremodulo="IAW";
    $horasmodulo= 122;
    $diasmodulo="martes, mercores, xoves";

    echo "El Modulo $nombremodulo tiene $horasmodulo horas y se imparte $diasmodulo"
?>
        <header>
          <h1>MODULO <?php  echo"$nombremodulo"?> CURSO 2022-2023</h1>      
        </header>  
        <section>      
          <article>
            <h2>Horario 2º ASIR del curso 2022_2023</h2>
          </article>      
        </section>
        <main>
          <section>
            <article>
              <table>
                <tr>
                  <td scope='col'>Horas</td>
                  <td scope='col'>Lunes</td>
                  <td scope='col'>Martes</td>
                  <td scope='col'>Miércoles</td>
                  <td scope='col'>Jueves</td>
                  <td scope='col'>Viernes</td>
                </tr>
                <tr>
                  <td scope='row'>8:10-9:00</td>
                  <td class='3' rowspan='2'>AXBD</td>
                  <td rowspan='3'>SRI</td>
                  <td rowspan='2'>SAD</td>
                  <td rowspan='3'>ASO</td>
                  <td rowspan='3'>ASO</td>
                </tr>
                <tr>
                  <td scope='row'>9:00-9:50</td>
                </tr>
                <tr>
                  <td scope='row'>9:50-10:40</td>
                  <td rowspan='2'>ASO</td>
                  <td rowspan='2'><?php  echo"$nombremodulo"?></td>
                  
                </tr>
                <tr>
                  <td scope='row'>10:40-11:30 </td>
                  <td>SAD</td>
                        <td><?php  echo"$nombremodulo"?></td>
                        <td>ASXBD</td>
                </tr>
                <tr>
                  <td colspan='6'>Recreo</td>
                </tr>
                <tr>
                  <td scope='row'>12:00-12:50</td>
                  <td>EIE</td>
                  <td>SAD</td>
                  <td><?php  echo"$nombremodulo"?></td>
                  <td><?php  echo"$nombremodulo"?></td>
                  <td>AXBD</td>
                </tr>
                <tr>
                  <td scope='row'>12:50-13:40</td>
                  <td rowspan='3'>SRI</td>
                        <td rowspan='2'>EIE</td>
                        <td rowspan='2'>SRI</td>
                        <td rowspan='2'>SAD</td>
                        <td rowspan='2'><?="$nombremodulo"?></td>
                </tr>
                <tr>
                  <td scope='row'>13:40-14:30</td>
                </tr>
                <tr>
                  <td scope='row'>14:30-15:20</td>
                  <td colspan='4'>LIBRE</td>
                </tr>
                </table>
    
            </article>
          </section> 
        </main>
        <footer>
         <p>Diego Vázquez García</p>
          <p>18/09/2022</p>
        </p>
        </footer>
      </body>  
    </html>
