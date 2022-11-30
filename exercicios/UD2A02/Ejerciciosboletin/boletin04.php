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
				<p>Ejericio 4<p>
			</section>
			<section id="resultado">
				<p>Texto de resultado</p>
                <?php
				$dado1 = rand (1,6);
				$dado2 = rand(1,6);
				$dado3 = rand(1,6);
				switch ($dado1 && $dado2 && $dado3) {
				  case (($dado1 == 1) && ($dado2 == 1) && ($dado3 == 1)):
					  echo " <h2>el dado1" . $dado1 . " y dado2  " . $dado2 . "y el dado 3" . $dado3 . "eres malo</h2>";
					  break;
				  case (($dado1 == 2) && ($dado2 == 2) && ($dado3 == 2)):
					echo " <h2>el dado1" . $dado1 . " y dado2  " . $dado2 . "y el dado 3" . $dado3 . "eres malo</h2>";
					  break;
				  case (($dado1 == 3) && ($dado2 == 3) && ($dado3 == 3)):
						echo " <h2>el dado1" . $dado1 . " y dado2  " . $dado2 . "y el dado 3" . $dado3 . "eres malo</h2>";
					  break;
				  case (($dado1 == 4) && ($dado2 == 4) && ($dado3 == 4)):
						echo " <h2>el dado1" . $dado1 . " y dado2  " . $dado2 . "y el dado 3" . $dado3 . "eres malo</h2>";
					  break;
				  case (($dado1 == 5) && ($dado2 == 5) && ($dado3 == 5)):
						echo " <h2>el dado1" . $dado1 . " y dado2  " . $dado2 . "y el dado 3" . $dado3 . "eres malo</h2>";
					  break;
				  case (($dado1 == 6) && ($dado2 == 6) && ($dado3 == 6)):
						echo " <h2>el dado1" . $dado1 . " y dado2  " . $dado2 . "y el dado 3" . $dado3 . "eres oro</h2>";
					  break;
				  case (($dado1 == 1) && ($dado2 == 2) && ($dado3 == 6)):
						echo " <h2>el dado1" . $dado1 . " y dado2  " . $dado2 . "y el dado 3" . $dado3 . "eres bronce</h2>";
					  break;
				  case (($dado1 == 2) && ($dado2 == 6) && ($dado3 == 6)):
						echo " <h2>el dado1" . $dado1 . " y dado2  " . $dado2 . "y el dado 3" . $dado3 . "eres plata </h2>";
					  break;
				  case (($dado1 == 3) && ($dado2 == 3) && ($dado3 == 3)):
						echo " <h2>el dado1" . $dado1 . " y dado2  " . $dado2 . "y el dado 3" . $dado3 . "eres malo</h2>";
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