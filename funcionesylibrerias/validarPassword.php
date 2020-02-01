<?php
/**
 * @titulo Validar contraseña
 * @descripcion Hacer una función que valide si una contraseña es segura
 * @author Fco. José Sánchez Romero
 * @fecha 23/10/2019
 */
?>
<html>
<head>
   <title>Validar Password</title>
</head>

<body>
<?php
$clave="";
function validar_clave($clave,&$error_clave){
   if(strlen($clave) < 8){
      $error_clave = "La clave debe tener al menos 8 caracteres";
      return false;
   }
   if (!preg_match('`[a-z]`',$clave)){
      $error_clave = "La clave debe tener al menos una letra minúscula";
      return false;
   }
   if (!preg_match('`[A-Z]`',$clave)){
      $error_clave = "La clave debe tener al menos una letra mayúscula";
      return false;
   }
   if (!preg_match('`[0-9]`',$clave)){
      $error_clave = "La clave debe tener al menos un caracter numérico";
      return false;
   }
   if (!preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $clave))
    {
        $error_clave = "La clave debe tener al menos un caracter especial";
      return false;
    }
   $error_clave = "";
   return true;
}

if (isset($_POST["clave"])){
    $clave=$_POST["clave"];
   $error_encontrado="";
   if (validar_clave($_POST["clave"], $error_encontrado)){
      echo "Contraseña válida";
      echo "<hr>";
   }else{
      echo "Contraseña no válida: " . $error_encontrado;
      echo "<hr>";
   }
}

?>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
Escribe una clave:
<input type=password name="clave" value="<?php echo $clave;?>">
<input type="submit" value="Enviar">
</form>
<?php
echo "<br/><a href=../"."verCodigo.php?src=".str_replace("/funcionesylibrerias","funcionesylibrerias",htmlspecialchars($_SERVER['PHP_SELF']))."><button>Ver Código</button></a>";

?>
</body>
</html>