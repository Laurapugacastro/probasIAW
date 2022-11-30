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
				<p>Ejercicio 1<p>
			</section>
			<section id="resultado">
				<p>Texto de resultado</p>
				<?php
                    $hora = 8;
                    $minuto = 59;
                    $segundo = 60;
                        if ($segundo = 60) {
                            $minuto++;
                         echo "<h2>el minuto es " . $minuto . "</h2>";
                        } elseif ($minuto == 60) {
                            $hora++;
                        } echo "<h2>la hora es " . $hora . "</h2>";
                ?>
				
			</section>
		</main>
		<footer> 
			<p id="nombre">Laura Puga Castro</section> 
			<p id="fecha">14/09/2022</section>
		</footer>
	</body>
</html>