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

$round_one = ["X", "X", "first winner"];
$round_two = ["second winner", "X", "X", "X"];
$round_three = ["X", "X", "X", "X", "third winner"];
$winners =["first winner","second winner", "third winner"];
echo implode("    ",$winners);
print"<br>";

$round_one[2] = "canvi en el primer<br>";
print implode("<br>",$round_one);print "<br>";

print $winners[0];
print"<br>";
print"Imprimirà First winner perque està en la posició 0 de \$winners";
?>
    </body>
</html>
