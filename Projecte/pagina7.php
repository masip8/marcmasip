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

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $course1 = $_POST['course1'];
    $course2 = $_POST['course2'];
    $course3 = $_POST['course3'];
    echo "Gracias por registrarte!";
}
?>
<form method="post" action="">
    <label>Nombre:</label>
    <input type="text" name="name" required>
    <br>
    <label>Curso 1:</label>
    <input type="radio" name="course1" >
    <br>
    <label>Curso 2:</label>
    <input type="radio" name="course2" >
    <br>
    <label>Curso 3:</label>
    <input type="radio" name="course3" >
    <br>
    <input type="submit" name="submit" value="Enviar">
</form>
</form>
         <form action="pagina9.php" method="post">
             <input type="submit" name="btn" value="Exit">
         </form> 
    </body>
</html>
