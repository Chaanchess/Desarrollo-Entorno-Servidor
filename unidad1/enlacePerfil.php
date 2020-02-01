<?php
$perfil="Admin";
?>
<html>
<nav>
    <?php
    if($perfil=="Admin"){
        echo "<ul>";
            echo "<li>Enlace Us1</li>";
            echo "<li>Enlace Us2</li>";
            echo "<li>Enlace Us3</li>";
            echo "<li>Enlace Adm1</li>";
            echo "<li>Enlace Adm2</li>";
        echo "</ul>";
    }else{
        echo "<ul>";
            echo "<li>Enlace Us1</li>";
            echo "<li>Enlace Us2</li>";
            echo "<li>Enlace Us3</li>";
        echo "</ul>";
    }
    ?>
</nav>

</html>