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
    $id=2; //creamos la variable id en 2
    while($id <=10){ //declaramos que id sea menor o igual a 20
         echo $id; //ejecutar id
         echo "<br>";
         $id+=2; //incrementamos en 2 la variable id por cada ciclo.
    }
    echo  "<hr>";
    echo $id; //Valor de la variable al finalitzar e
?>
        <html>
    <head>
        <meta charset="UTF-8">
        <title>Tirada de daus</title>
    </head>
    <body>
        <h1>Tirada de daus</h1>
        <?php
            # Primera tirada
            $tirada = rand(1,6);
            $tirades=1;
            
            # mentre no surti 6 
            while($tirada != 6) {
                # Mostra tirada 
                print "$tirada<br>";
                
                # Tirada següent
                $tirada = rand(1,6);
                $tirades++;
            }
            
            # Tirada = 6 
                print "Felicitats! has obtingut un 6!<br>";
        ?>
    </body>
</html>
    </body>
</html>
