<?php

function login($user, $psw){
    $llogin=false;
    if($user == "cristiano" and $psw=="messi"){
        $llogin=true;
    }else{
        $llogin=false;
    }
    return $llogin;
}

function limpiaCampo($campo)
{
    $campo = trim($campo);
    $campo = stripslashes($campo);
    $campo = htmlspecialchars($campo);
    return $campo;
}

?>