<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
          $comentari =$_REQUEST["comentari"];
          $num= strlen($comentari);


         if ($num <=150) {
        print " Gràcies per la teva aportació";
     }else{
         print "La longitud màxima dels comentaris és de 150, el teu comentari en canvi en té $num caràcters";
     }

        ?>
    </body>
</html>
