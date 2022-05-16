<?php
include "conexion.php"; 

$nombre =$_POST["nomb"];
$apellido =$_POST["apel"];
$contraseña =$_POST["pass"];
$correo =$_POST["emai"];
$pais =$_POST["pais"];
$dia =$_POST["Dia"];
$mes =$_POST["Mes"];
$año =$_POST["Año"];
$sexo =$_POST["sexo"];
$añoActual = date('o');
$edad = $añoActual - $año;

if ($edad < 18 ) {
	die( " no tienes edad suficiente para utilizar Kdrive" );

}

$insertarDatos = "INSERT INTO `usuario`(`nombre`, `apellido`, `contraseña`, `correo`, `pais`, `edad`, `sexo`) VALUES ('$nombre','$apellido','$contraseña','$correo','$pais','$edad','$sexo')";
$ejecutarInsertar = mysqli_query($conexion, $insertarDatos);



?>
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
       <article id="registo">
              <div>
       <h7>REGISTRO SATISFACTORIO SR:  </h7>';echo $nombre," ",$apellido;
       ?>
       <?php
              echo'<br>
              <h7> TU CORREO ES:</h7> ';echo $correo;
        ?>      
        <?php
              echo'<br>
              <h7>TU PAIS ES :</h7>';echo $pais;
        ?>
      
       <?php
              echo '<br>
              <h7>TU SEXO ES: </h7>';echo $sexo;       ;
       ?>
       <?php
       echo'<br>
       <h7>TU EDAD ES:  </h7>'; echo $edad; echo '<h7>AÑOS</h7>';
       ?>      
       <?php
      echo '</div>
       <br>
       <br>
       <a href="../index.php"><button>INGRESA</button></a>
       </article>
</section>
</body>
</html>';
       
       ?> 
