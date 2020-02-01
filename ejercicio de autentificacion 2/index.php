<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE); 
include "config/parameters.php";
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
			  <?php 
			  include "include/menu.php"?>
		  </nav>
		<main>
			<section>
				<?php 

                if (isset($_GET["page"])){
                    if ($_GET["page"]=="home"){
                        include "include/home.php";
                    }
                    if ($_GET["page"]=="alumno"){
                        include "include/alumno.php";
					}
					if ($_GET["page"]=="profesor"){
                        include "include/profesor.php";
					}
					if ($_GET["page"]=="administrador"){
                        include "include/administrador.php";
					}
					if ($_GET["page"]=="cerrar"){
                        include "include/cierresesion.php";
					}
                }else{
					include "include/home.php";
				}
				echo "<br>";
				echo "Su nombre es <strong>". $_SESSION["nombre"]."</strong>";
				echo "<br>";
				echo "Su perfil es <strong>". $_SESSION["perfil"]."</strong>";
                
                ?>			
			</section>
		</main>
		<footer>
		  <?php include "include/footer.php"?>
            
        </footer>
	   </body>
</html>