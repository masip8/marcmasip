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
          <h1>Tirada de daus</h1>
        <?php
            # Primera tirada
            $tirada = rand(1,6);
            $tirades=1;
            $conta1=0;
            $conta2=0;
            $conta3=0;
            $conta4=0;
            $conta5=0;
            # mentre no surti 6 
            print"<ul>";
            while($tirada != 6) {
               print "<img src=\"../img/img/$tirada.svg\"></img><br>";
                # Mostra tirada 
               
                
                switch ($tirada) {
                    case "1";   //en cas que surti un 1 fes tal cosa
                    $conta1++;
                    break;
                 case "2";
                    $conta2++;
                    break;
                 case "3";
                    $conta3++;
                    break;
                 case "4";
                    $conta4++;
                    break;
                 case "5";
                    $conta5++;
                    break;
                
                default;   //es com un else
                    break;
                }
                
                
                if ($tirada ==5) {  //es el mateix que adalt pero en if
                    $conta5++;
                }
                
                # Tirada següent
                $tirada = rand(1,6);
                $tirades++;
            }
            print"</ul>";
            # Tirada = 6 
                print "Felicitats! has obtingut un 6!<br>";
        ?>
    </body>
</html>
