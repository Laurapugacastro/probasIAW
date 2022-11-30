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
				<p>Ejercicio 7<p>
			</section>
			<section id="resultado">
				<p>Texto de resultado</p>
<?php
            $n = 4554;
            $nstring = (string)$n;
            $result = "";
            for ($i = strlen($n) - 1; $i >= 0; $i--) {
                $result.=$nstring[$i];
            }
            $inv = (int)$result;
            if ($n == $inv) {
                echo "<h3> ". $n." es capicúa.</h3>";
            } else {
                echo "<h3> " . $n." no es capicúa. </h3>";
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