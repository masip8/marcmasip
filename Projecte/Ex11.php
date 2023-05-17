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
         $n1 =$_REQUEST["n1"];
         $n2 =$_REQUEST["n2"];
         $n3 =$_REQUEST["n3"];
         if ($n1 == $n2 && $n2 == $n3){
print "Els tres numeros son iguals";
} elseif ($n1 != $n2 && $n2 != $n3 && $n1 != $n3) {
print "Ningun numero es igual";
}
 elseif ($n1 == $n3) {
print "Numero 1 es igual a numero 3";
} elseif ($n2 == $n3){
print "Numero 2 es igual a numero 3";
} elseif ($n1 == $n2) {
print "Numero 1 es igual a numero 2";
} 
        ?>
    </body>
</html>
