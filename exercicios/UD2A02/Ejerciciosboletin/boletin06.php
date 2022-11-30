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
				<p>Ejercicio 6<p>
			</section>
			<section id="resultado">
				<p>Texto de resultado</p>
<?php
            $n1 = 220;
            $n2 = 284;
            $suma = 0;
            $suma2 =0;
            for ($c = 1; $c < $n1; $c++) {
                if ($n1 % $c == 0) {
                    $suma = $suma + $c;
                }
            }
            for ($d = 1; $d < $n2; $d++) {
                if ($n2 % $d == 0) {
                    $suma2 = $suma2 + $d;
                }
            }
           
            if ($suma == $n2){
                if ($suma2 == $n1){
                    echo "<h3> ". $n1." y ".$n2." son amigos.</h3>";
                }
            }else{
                    echo "<h3> " . $n1." y ".$n2." no son amigos.</h3>";
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