<?php
/**
 *  Recibir datos de un formulario
 * @author Francisco José Sánchez Romero
 * @fecha 03/10/2019
 */
if (!isset($_REQUEST['enviar'])){
    header('Location: ejFormulario2.php');
}
    $nombre=$_REQUEST["Nombre"];
    echo "Su nombre es: ".$nombre."";
    echo "<br>";
    
    $apellidos=$_REQUEST["Apellidos"];
    
    echo "Su apellido es: ".$apellidos."";
    echo "<br>";
    
    
    $direccion=$_REQUEST["Direccion"];
    
    echo "Su dirección es: ".$direccion."<br/>";
    echo "<br>";
    
    
    echo "<a href=../"."verCodigo.php?src=".str_replace("/unidad2","unidad2",htmlspecialchars($_SERVER['PHP_SELF']))."><button>Ver Código</button></a>"; 


?>