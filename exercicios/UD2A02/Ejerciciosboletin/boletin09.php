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
				<p>Ejercicio 9<p>
			</section>
			<section id="resultado">
				<p>Texto de resultado</p>
<?php
            for ($tabla = 1; $tabla <= 10; $tabla++) {
                echo "<h2>Tabla del $tabla </h2>";
                for ($n = 1; $n <= 10; $n++) {
                    echo "<h3>  $tabla x $n = ". ($tabla * $n) . "</h3> <br/>";
                }
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