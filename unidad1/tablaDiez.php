<?php
for ($i = 1; $i <= 10; $i++){
    echo "Tabla del ".$i.":<br/>";
    for ($j = 1; $j <= 10; $j++){
        echo $i * $j ."\n";
    }
    echo "<br/>";
}
echo "<br/><a href=../"."verCodigo.php?src=".str_replace("/unidad1","unidad1",htmlspecialchars($_SERVER['PHP_SELF']))."><button>Ver Código</button></a>"; 
?>