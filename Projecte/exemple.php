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
       <html>
    <head>
        <meta charset="UTF-8">
        <title>Tirada de daus</title>
    </head>
    <body>
        <h1>Tirada de daus</h1>
        <?php
            # Iniciliatza comptadorsç
            $contador = 1;
            $contadornum = [0,0,0,0,0,0];
            # Crea una array amb els comptadors de cares
            
        
            # Primera tirada
            $tirada = rand(1,6);
                      
            print "<ul>";
            
            # mentre no surti 6 
            while($tirada != 6) {
                # Mostra tirada 
                print "<li>$tirada</li>";
                
                $contador ++;
                
                
                
                switch ($tirada){
                    case 1:
                        $contadornum[0]++; //$contadornum[$tirada-1]++;
                        break;                                    
                    case 2:
                        $contadornum[1]++;
                        break;
                    case 3:
                         $contadornum[2]++;
                        break;
                    case 4:
                          $contadornum[3]++;
                        break;
                    case 5:
                          $contadornum[4]++;
                        break;
                    
                }
                
                # Tirada següent
                $tirada = rand(1,6);                
            }
                print "</ul>";
                print_r($contadornum);
                print"<br>";
               print $contadornum[0];print"<br>";
               print $contadornum[1];print"<br>";
               print $contadornum[2];print"<br>";
               print $contadornum[3];print"<br>";
               print $contadornum[4];print"<br>";
               print $contadornum[5];print"<br>";
            # Tirada = 6 
              #  print "Felicitats! has tirat $contador vegades fins obtindre el numero $tirada <br> El numero 1 ha sortit $contadornum vegades<br>El numero 2 ha sortit $contadornum vegades<br>El numero 3 ha sortit $contadornum vegades<br>El numero 4 ha sortit $contadornum vegades<br>El numero 5 ha sortit $contadornum vegades<br>";
   ?>
    </body>
</html>
    </body>
</html>
