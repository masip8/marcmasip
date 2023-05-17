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
        $noms = ["Marta","Carmina","Roger","Raquel"];
        
        print_r($noms);print "<br>";
        $noms [] = "Marta";
        print_r($noms);print"<br>";
        $noms [1] = "Carme";
         print_r($noms);print"<br>";
         
         //contar numero d'elements de l'array
         $elements =count ($noms);
         print "Aquest array te $elements elements <br>";
         
         //recorre l'array i imprimeix element a element
         foreach($noms as $val){
             print $val;
         print"<br>";
         }
         $valors = count($noms);
        ?>
    </body>
</html>
