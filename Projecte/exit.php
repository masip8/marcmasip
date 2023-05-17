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
        // Creem o llegim la variable sessió
session_start();
session_destroy();

print "<p>El nom és". $_SESSION["nom"]."</p>";
//Enllaços a pàgines que utilitzen la sessió
print "<a href=\"login1.php\"> Login </a><br>";
print "<a href=\"login2.php\"> Login 2 </a>";
?>
    </body>
</html>
