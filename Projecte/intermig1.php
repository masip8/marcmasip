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
        $jugA1=rand(1,10);
        $jugA2=rand(1,10);
        $jugA3=rand(1,10);
         $jugB1=rand(1,10);
          $jugB2=rand(1,10);
           $jugB3=rand(1,10);
           $totalA1=$jugA1+$jugA2+$jugA3;
           $totalB1=$jugB1+$jugB2+$jugB3;
           
           if($totalA1>15 and $totalB1>15) {
                   echo "Heu perdut els dos";
           }elseif ($totalA1>15) {
                   
           }
        ?>
    </body>
</html>
