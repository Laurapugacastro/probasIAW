<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
	<head>
		
		<meta http-equiv="Content-Type"	content="text/html; charset=UTF-8" />
		<link rel = "stylesheet" type = "text/css" href = "plantilla.css" media = "screen"/>
	</head>
	<body>
		<header>
			<h1>Módulo IAW 2022-23</h1>
		</header>
		<main>
			<section id="enunciado">
				<p>Ejercicio 5<p>
			</section>
			<section id="resultado">
				<p>Texto de resultado</p>
                <?php
                    $dia = 01;
                    $mes = 03;
                    $año = 2019;            
                $fechacompleta = $dia.-$mes.-$año;

                    if (date('L', strtotime("$año-03-01"))) {
                        echo ' <h3> el ' . $fechacompleta . 'es bisiesto </h3>';
                   } else {
                        echo '<h3> el ' . $fechacompleta .  ' es no bisiesto </h3>';
                   }
                
                ?>
	</section>
		</main>
		<footer> 
			<p id="nombre">Laura Puga Castro</section> 
			<p id="fecha">14/09/2022</section>
		</footer>
	</body>
</html>