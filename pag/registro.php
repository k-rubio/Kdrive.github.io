<?php
echo '<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../stylos/Stylos.css">
	<meta charset="utf-8">
	<title>Registrate</title>
</head>
<body>
	<header >	
		<h1>KDRIVE<h1/>	
	</header>
	<section>
		<article>
			<form action="registroOk.php" method="POST">
				<h2>REGISTRO</h2>
				<input type="text" name="nomb" placeholder="NOMBRE" required>
				<br>
				<input type="text" name="apel" placeholder="APELLIDO" required>
				<br>
				<input type="password" name="pass" placeholder="CONTRASEÑA" required>				
				<br>
				<input type="Email" name="emai" placeholder="CORREO" required>
				<br>
				<input type="text" name="pais" placeholder="PAIS" required>
				<br>
				<h5>FECHA DE NASIMIENTO</h5>
				<input id="date" type="text" name="Dia" placeholder="Dia" required>
				<input id="date" type="text" name="Mes" placeholder="Mes" required>
				<input id="date" type="text" name="Año" placeholder="Año" required>
				<br>
				<h7>SEXO</h7>
				<h7><input type="radio" name="sexo" value="M" required="">M</h7>
				<h7><input type="radio" name="sexo" value="F" required="">F</h7>
				<br>
				<input type="submit" name="envi" value="REGISTRAR">
			</form>
		</article>
	</section>
</body>
</html>';
?>
