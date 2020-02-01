<?php
/**
 * @titulo Devuelve las iniciales de tu nombre y apellidos
 * @descripcion Hay que crear una función que devuelva las iniciales del nombre y los apellidos introducidos
 * @author Fco. José Sánchez Romero
 * @fecha 22/10/2019
 */


 $nombre="";
 $errorNombre="";

 if(isset($_POST["submit"])){
    $nombre = $_POST["nombre"];
    if(empty($_POST["nombre"])){
        $errorNombre = "El nombre no puede estar vacío";
    }
    else{
        echo "Las iniciales de su nombre y apellidos son: ".calcularIniciales($nombre);
        echo "<hr>";
    }
}

echo '<form action="'.htmlspecialchars($_SERVER['PHP_SELF']).'" method="post">';
echo '<label>Introduce tu nombre y apellidos</label>';
echo "<br/>";
echo '<input type="text" name="nombre" value="'.$nombre.'"/><span">'.$errorNombre.'</span>';
echo "<br/>";
echo "<br/>";
echo '<input type="submit" name="submit" value="Enviar"/>';
echo "<br/>";
echo '</form>';
echo "<br/><a href=../"."verCodigo.php?src=".str_replace("/funcionesylibrerias","funcionesylibrerias",htmlspecialchars($_SERVER['PHP_SELF']))."><button>Ver Código</button></a>";


function calcularIniciales($nombre){
    $iniciales = "";
    $arrayNombre = explode(" ",$nombre);
    foreach ($arrayNombre as $key => $value) {
        $iniciales.= substr($value,0,1);
    }
    return $iniciales;
}
?>