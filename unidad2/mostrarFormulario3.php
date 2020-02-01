<?php
/**
 *  Recibir datos de un formulario
 * @author Francisco José Sánchez Romero
 * @fecha 03/10/2019
 */
if (!isset($_REQUEST['enviar'])){
    header('Location: ejFormulario3.php');
}
    $nombre=$_REQUEST["nombre"];
    echo "Su nombre es: ".$nombre."";
    echo "<br>";
    
    $apellidos=$_REQUEST["apellidos"];
    
    echo "Su apellido es: ".$apellidos."";
    echo "<br>";
    
    
    $direccion=$_REQUEST["direccion"];
    
    echo "Su dirección es: ".$direccion."<br/>";
    echo "<br>";

    $genero=$_REQUEST["genero"];
    
    echo "Su género es: ".$genero."<br/>";
    echo "<br>";

    $hobbit=$_REQUEST["hobbit"];
    
    echo "Su principal hobbit es: ".$hobbit."<br/>";
    echo "<br>";
    echo "Sus colores favoritos son: ";
    echo "<br>";
    foreach ($_REQUEST["colores"] as $color){
        echo $color."\n";
    }
    
    echo "<br>";
    echo "<br>";
    
    echo "<a href=../"."verCodigo.php?src=".str_replace("/unidad2","unidad2",htmlspecialchars($_SERVER['PHP_SELF']))."><button>Ver Código</button></a>"; 


?>