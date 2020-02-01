<?php
/**
 * Almacenar usuario y contraseña con cookies
 * Francisco José Sánchez Romero
 */
$usuarioInicial="";
$passInicial="";
if(isset($_COOKIE["usuario"])){
    $usuarioInicial=$_COOKIE["usuario"];
    $passInicial=$_COOKIE["password"];
}

echo "<form action='mostrarFormularioCookies.php' method='post'>";
echo "Usuario: ";
echo "<br/>";
echo "<input type='text' name='usuario' value='".$usuarioInicial."'>";
echo "<br/>";
echo "<br/>";

echo "Contraseña: ";
echo "<br/>";
echo "<input type='text' name='password' value='".$passInicial."'>";


echo "<br/>";
echo "Recordar credenciales<input type='checkbox' name='recordar' checked ='checked' value='1'><br/>";
echo "<br/><input type='submit' name='submit' value='Enviar'><br/>";
echo "</form>";

?>
