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
        
        $segons =$_REQUEST["seg"];
        $segon= ($segons%60);
         $hora = floor($segons/3600);
          $min = floor($segons - ($hora*3600)) / 60;
          $min= floor($min);
       print "$segons segons son $min minuts i $segon segons";
        ?>
    </body>
</html>
