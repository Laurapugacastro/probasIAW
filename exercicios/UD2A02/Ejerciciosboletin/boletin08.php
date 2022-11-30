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
				<p>Ejercicio 8<p>
			</section>
			<section id="resultado">
				<p>Texto de resultado</p>
<?php
            $n = 55;
            $suma = 0;
            for ($c = 1; $c < $n; $c++) {
                if ($n % $c == 0) {
                    $suma = $suma + $c;
                }
            }
            if ($suma == $n){
                echo  "<h3> " . $n." es perfecto </h3>.";
            }else {
                echo "<h3> " . $n." no es perfecto.</h3>";
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