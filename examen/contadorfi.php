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
session_start();
if(isset($_SESSION["contador"])){
	$_SESSION["contador"]++;
}else{
	$_SESSION["contador"] = 1;
}

echo "Ens has visitat".$_SESSION["contador"]."vegades";
session_destroy();

echo "<h3><a href=\"contador.php\"> Pàgina principal inicia sessió </a></h3>";
?>
    </body>
</html>
