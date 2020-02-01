<?php
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
                    if ($_GET["page"]=="ajustes"){
                        include "include/ajustes.php";
					}
                }else{
					include "include/home.php";
				}
                
                ?>			
			</section>
		</main>
		<footer>
		  <?php include "include/footer.php"?>
            
        </footer>
	   </body>
</html>