<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login sessions</title>
    </head>
    <body>

<?php
session_start();

//Guardem una variable dins la sessió
$_SESSION["nom"] = "Pepito";
print "<p>El nom és". $_SESSION["nom"]."</p>";
//Enllaços a pàgines que utilitzen la sessió
print "<a href=\"login1.php\"> Login </a><br>";
print "<a href=\"login2.php\"> Login 2 </a><br>";
print "<a href=\"exit.php\"> Exit </a>";
?>
    </body>
</html>
