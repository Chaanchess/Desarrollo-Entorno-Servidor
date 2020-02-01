<?php 
    /**
     * Paleta de colores
     * @author Francisco José Sánchez Romero
     */
    echo '<table>';
    for ($r = 0; $r < 256; $r += 16) {
       for ($g = 0; $g < 256; $g += 16) {
           for ($b = 0; $b < 256; $b += 16) {
               echo "<td style='background-color: rgb($r, " . "$g, $b);'>";
               echo '('. $r . ',' . $g.',' .$b .')';
               echo "</td>";

               if ($b > (255 - 16)) {
                   echo("</tr><tr>");

               }
           }
       }
           echo("</tr><tr></tr>");

   }
echo '</table>';
    echo "<br/><a href=../"."verCodigo.php?src=".str_replace("/unidad1","unidad1",htmlspecialchars($_SERVER['PHP_SELF']))."><button>Ver Código</button></a>";  
 ?>
