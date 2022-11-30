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
				<p>Ejercicio 3<p>
			</section>
			<section id="resultado">
				<p>Texto de resultado</p>
				<?php
              $producto = rand (1,3);
			  $calidad = rand(1,3);
			  switch ($producto && $calidad) {
				case (($producto == 1) && ($calidad = 1)):
					echo " <h2>el producto" . $producto . " y su calidad es " . $calidad . "tiene un precio de 5000 </h2>";
					break;
				case (($producto = 1) && ($calidad == 2)):
					echo " <h2>el producto" . $producto . " y su calidad es " . $calidad . "tiene un precio de 4500</h2>";
					break;
				case (($producto = 1) && ($calidad == 3)):
					echo " <h2>el producto" . $producto . " y su calidad es " . $calidad . "tiene un precio de 4000</h2>";
					break;
				case (($producto = 2) && ($calidad == 1)):
					echo " <h2>el producto" . $producto . " y su calidad es " . $calidad . "tiene un precio de 4500</h2>";
					break;
				case (($producto = 2) && ($calidad == 2)):
					echo " <h2>el producto" . $producto . " y su calidad es " . $calidad . "tiene un precio de 4000</h2>";
					break;
				case (($producto = 2) && ($calidad == 3)):
					echo " <h2>el producto" . $producto . " y su calidad es " . $calidad . "tiene un precio de 3500</h2>";
					break;
				case (($producto = 3) && ($calidad == 1)):
					echo " <h2>el producto" . $producto . " y su calidad es " . $calidad . "tiene un precio de 4000</h2>";
					break;
				case (($producto = 3) && ($calidad == 2)):
					echo " <h2>el producto" . $producto . " y su calidad es " . $calidad . "tiene un precio de 3500</h2>";
					break;
				case (($producto = 3) && ($calidad == 3)):
					echo " <h2>el producto" . $producto . " y su calidad es " . $calidad . "tiene un precio de 3000</h2>";
					break;
			
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