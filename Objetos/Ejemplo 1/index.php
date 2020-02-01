<?php
require_once "Class/Alumno.php";
require_once "Class/Preferencia.php";
require_once "Class/Usuario.php";
require_once "Class/Mascota.php";
include "config/parameters.php";
error_reporting(E_ALL ^ E_NOTICE); 
?>
<!DOCTYPE html>

<html lang="es">

	<head>
		<title><?php echo $titulo?></title>
		<meta charset="utf-8">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<link rel="stylesheet" type="text/css"  href="css/mystyle.css">
	</head>
		<body>
		  <header>
		    <?php include "include/cabecera.php"?>
		  </header>
		  <nav>
		  <?php include "include/menu.php"?>
		  </nav>
		<main>
			<section>	
            <?php

			$persona1 = new Persona("Francisco","Sánchez","Romero");
			$persona1->saluda();

			$alumno1 = new Alumno("Paco","García","Méndez");
			$alumno1->saluda();
			echo "<hr>";

			Preferencia::init();
			echo "La zona horaria es: ".Preferencia::$timezone."<br>";
			echo "El lenguaje es: ".Preferencia::$language."<br>";
			echo "El color es: ".Preferencia::$color."<br>";
			echo "La música está: ".Preferencia::$music."<br>";
			echo "<hr>";

			echo Usuario::restriccion();
			echo "<br>";
			$user = new Usuario("Usuario");
			echo "<br>Con contraseña menor de 6 caracteres<br>";
			if($user->setPassword("admin","1234")){
				echo "Contraseña establecida correctamente";
			}else{
				echo "Error ".$user::restriccion();
			}
			echo "<br>";

			echo "<br>Con contraseña mayor o igual de 6 caracteres<br>";
			if($user->setPassword("admin","123456")){
				echo "Contraseña establecida correctamente";
			}else{
				echo "Error ".$user::restriccion();
			}
			echo "<hr>";

			$mascota1 = new Mascota("Pipo","28-04-1998");
			echo $mascota1->infoMascota();
			$mascota2 = new Mascota("Luisito","03-02-2010");
			echo $mascota2->infoMascota();
			$mascota3 = new Mascota("Tobi","07-04-2015");
			echo $mascota3->infoMascota();
			
			
        
            ?>		
			</section>
		</main>
		<footer>
		  <?php include "include/footer.php"?>
        </footer>
	   </body>
</html>