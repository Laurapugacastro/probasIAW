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
				<p>Ejercicio 2<p>
			</section>
			<section id="resultado">
				<p>Texto de resultado</p>
                <?php
                $dia = 03; 
				$mes = 1;    
                if (($dia >= 21) && ($mes == 12) || ($dia <= "20") && ($mes <= 3)){
                	echo "<h2>invierno</h2>";
				} elseif  (($dia >= 21) && ($mes == 3) || ($dia <= "21") && ($mes <= 6)){
                	echo "<h2>primavera</h2>";
				} elseif  (($dia >= 22) && ($mes == 6) || ($dia <= "22") && ($mes <= 9)){
                	echo "<h2>verano</h2>";
				} else  {
               		 echo "<h2>outono</h2>";
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