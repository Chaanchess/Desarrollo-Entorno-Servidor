<?php

/**
 * Almacenar usuario y contraseña con cookies
 * Francisco José Sánchez Romero
 */

if (!isset($_POST['submit'])) {
    header('Location: loginCookies.php');
}

$autentificado=false;
$usuario = limpiaCampo($_POST["usuario"]);
$pass = limpiaCampo($_POST["password"]);
$preocesaForm = true;

if (empty($usuario)) {
    $preocesaForm = false;
}

if (empty($pass)) {
    $preocesaForm = false;
}

if (!$preocesaForm) {
    header('Location: loginCookies.php');
}


setcookie("usuario", $usuario, time() + 3600);
setcookie("password", $pass, time() + 3600);

if(($usuario=="pipo") && ($pass=="perrete")){
    $autentificado=true;
}

if (!isset($_POST["recordar"])) {
    $usuario = "";
    $pass = "";
    setcookie("usuario", $usuario, time() - 5);
    setcookie("password", $pass, time() - 5);
}

if($autentificado){
    echo "Ok. Acceso permitido";
}else{
    echo "Error. Prueba de nuevo";
}



function limpiaCampo($campo)
{
    $campo = trim($campo);
    $campo = stripslashes($campo);
    $campo = htmlspecialchars($campo);
    return $campo;
}
