
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
				<p>Sumar dos números<p>
			</section>
			<section id="resultado">
				<p>Texto de resultado</p>
            <body>
                 <?php
                    $bol=true;
                    $cadea = "PUNTOS";
                    $flot= 2.4 ;
                    $num=2;

                    /*
					echo 'Tipo:  '. gettype($cadea);
                    echo "Tipo: " . gettype($bol);
                    echo "Tipo: " . gettype($flot);
                    echo "Tipo: " . gettype($num);
					*/

					echo 'Tipo:  '. is_scalar($cadea);
                    echo "Tipo: " . is_scalar($bol);
                    echo "Tipo: " . is_scalar($flot);
                    echo "Tipo: " . is_scalar($num);
                   
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
   