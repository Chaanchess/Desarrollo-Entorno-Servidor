<?php

include "config/parameters.php";
?>
<!DOCTYPE html>

<html lang="es">

	<head>
		<title><?php echo $titulo?></title>
		<meta charset="utf-8">
		<meta name="description" content="Cordoba ciudad patrimonio">
		<meta name="keywords" content="Turismo, patimonio, viajes">
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
                if (isset($_GET["page"])){
                    if ($_GET["page"]=="home"){
                        include "pages/home.html";
                    }
                    if ($_GET["page"]=="mezquita"){
                        include "pages/mezquita.html";
					}
					if ($_GET["page"]=="cascohistorico"){
                        include "pages/cascohistorico.html";
					}
					if ($_GET["page"]=="mediaazahara"){
                        include "pages/mediaazahara.html";
					}
					if ($_GET["page"]=="patios"){
                        include "pages/patios.html";
					}
					if ($_GET["page"]=="sinagoga"){
                        include "pages/sinagoga.html";
					}
					if ($_GET["page"]=="rturistico"){
                        include "pages/rturistico.html";
					}
					if ($_GET["page"]=="contacto"){
                        include "pages/contacto.html";
					}
					if ($_GET["page"]=="prueba"){
                        include "pages/prueba.html";
                    }
                }else{
					include "pages/home.html";
				}
                
                ?>			
			</section>
			<aside>
                <?php include "include/adicional.php"?>
			</aside>
		</main>
		<footer>
		  <?php include "include/footer.php"?>
            
        </footer>
	   </body>
</html>