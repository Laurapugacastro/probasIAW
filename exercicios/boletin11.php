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

                     echo "El nombre del servidor es\n "  . $_SERVER["SERVER_NAME"];
                     echo 'La ip del servidor es'. $_SERVER["SERVER_ADDR"].'</br>';
                     echo "El directorio raíz del servidor es\n "  . $_SERVER["DOCUMENT_ROOT"];
                     echo "El puerto del servidor es\n "  . $_SERVER["SERVER_PORT"];
                     echo "El script del servidor es "  . $_SERVER["SCRIPT_NAME"];
                     echo "El script del servidor es "  . $_SERVER["REMOTE_ADDR"];
                     echo "El script del servidor es "  . $_SERVER["REMOTE_PORT"];
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
   