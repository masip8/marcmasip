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

// Comprobem si existeix amb isset()
if (isset($_SESSION["nom"])) {
    // Si està identificat, en altres paraules, si exixteix la variable, el saludem
    echo 'Hola ' . $_SESSION["nom"];
} else {
    // En cas contrari, redirigim al visitant a la pàgina d'inici
    header('Location: http://localhost/login.php');
    die();
}
?>
    </body>
</html>
