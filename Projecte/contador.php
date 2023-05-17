<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Contador</title>
    </head>
    <body>
         <?php 
session_start();
if(isset($_SESSION["contador"])){
	$_SESSION["contador"]++;
}else{
	$_SESSION["contador"] = 1;
}

echo "Ens has visitat".$_SESSION["contador"]."vegades";
echo "<h3><a href=\"contador.php\"> Visita una altra pàgina </a></h3>";
echo "<h3><a href=\"contadorfi.php\"> Finalitzar la sessió i les visites </a></h3>";
?>
    </body>
</html>
