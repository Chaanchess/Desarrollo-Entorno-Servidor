<?php
include "include/funciones.php";


session_start();
$usuario="";
$psw="";
$msgErrorUsuario="";
$msgErrorPass="";

$lprocesaFormulario=false;

if (!isset($_SESSION["aut"])) {
    $_SESSION["aut"] = false;
    $_SESSION["user"] = "Invitado";
}

if(isset($_POST["submit"])){
    $usuario = limpiaCampo($_POST["user"]);
    $psw =limpiaCampo($_POST["pass"]);

    if(empty($usuario)){
        $msgErrorUsuario=" El usuario no puede estar vacío";
    }

    if(empty($psw)){
        $msgErrorPass= " La contraseña no puede estar vacía";
    }
    $lprocesaFormulario=true;
}

if($lprocesaFormulario){
    if (login(limpiaCampo($_POST["user"]), limpiaCampo($_POST["pass"]))){
        $_SESSION["aut"] = true;
        $_SESSION["user"] = $usuario;
    }
}

echo "<h1>Ejercicio de autenticación</h1>";

if ($_SESSION["aut"]) {
    echo "<a href='privado.php'>Privado</a>";
    echo "<br>";
    echo "<a href='cierresesion.php'>Salir</a>";
    echo "<br>";
    echo "<br>";
    echo "Usted está como " . $_SESSION["user"];
} else {
    echo "Usted está como " . $_SESSION["user"];
    echo "<br>";
    echo "<form action='" .htmlspecialchars($_SERVER["PHP_SELF"]) . "' method='post'>";
    echo "<br>";
    echo "Usuario: ";
    echo "<br/>";
    echo "<input type='text' name='user' value='" . $usuario . "'><span>".$msgErrorUsuario."</span>";
    echo "<br/>";
    echo "<br/>";

    echo "Contraseña: ";
    echo "<br/>";
    echo "<input type='text' name='pass'><span>".$msgErrorPass."</span>";
    echo "<br/>";
    echo "<br>";
    echo "<input type='submit' name='submit' value='Enviar'>";
    echo "</form>";
}

?>