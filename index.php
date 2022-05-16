<?php
echo '<!DOCTYPE html>
<html>
<head>
	<title>KDRIVE</title>
	<link rel="stylesheet" type="text/css" href="../stylos/Stylos.css">
	<meta charset="utf-8">
</head>
<body>
<header >
	
		<h1>KDRIVE<h1/>	
</header>
<section>
	<br>
	<article>
		<h2>ingreso</h2>
		<form action="plataforma.php" method="POST">
			<input type="Email" name="correo" placeholder="Correo" required="Escribe el correo">
			<input type="password" name="pass" placeholder="Contraseña" required="Escribe contraseña">		
			<input type="submit" name="envi" value="Ingresar">
				<a href="pag/registro.php">
	        		<input type="button"  value="Registrate">        		
   			 	</a>
		</form>
	</article>
</section>
</body>
</html>';
?>