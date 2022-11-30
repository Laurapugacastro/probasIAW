<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
	<head>
		
		<meta http-equiv="Content-Type"	content="text/html; charset=UTF-8" />
		<link rel = "stylesheet" type = "text/css" href = "plantilla.css" media = "screen"/>
    </head>
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
				<h2>Sumar dos números</h2>
			</section>
			<section id="resultado">
				<h2>Texto de resultado</h2>
            <body>
                 <?php
                    $variable = 4.865;
                    $cambio = (int)$variable;

                    echo "la parte enterea de $variable es " .round($variable,1,PHP_ROUND_HALF_DOWN);
                    echo " <br>la parte enterea de $variable es " .intval($variable);
                    echo " <br>la parte enterea de $variable es " .$cambio;
                ?>
            </body>

				<br/>
				
			</section>
		</main>
		<footer> 
			<p id="nombre">Laura Puga Castro</section> 
			<p id="fecha">14/09/2022</section>
		</footer>
	</body>
</html>