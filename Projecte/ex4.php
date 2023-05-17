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
      

$message = ["Oh hey", " You're doing great", " Keep up the good work!\n"];

$favorite_nums = [7, 201, 33, 88, 91];
// Write your code below:
echo implode("!",$message); 
echo implode(", ",$favorite_nums);

print_r($favorite_nums);
print"<br>";
print "l'implode uneix els elements de l'array amb strings (text)<br>";
print"et diu la informació de l'array [0], [1],...";
        ?>
        
    </body>
</html>
