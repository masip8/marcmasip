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
        $primer_array = array(1,"dos",3,"quatre",5,"sis",7);
        print "$primer_array[1] and $primer_array[6]";
        print"<br>";
          print"<br>";
          
          $primer_array[0] = "un";
          $primer_array[2] = "avió";// Se modifica la key Monnie
        print "$primer_array[0] i $primer_array[2]";
          
        print"<br>";
        print"<br>";
        $primer_array[0] = 1;
          $primer_array[2] = 3;
        foreach ($primer_array as $val) {
     print"<br>";
     print "$val";
}
        ?>
    </body>
</html>