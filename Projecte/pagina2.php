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

$username = $_POST["username"];
$password = $_POST["password"];

$users = $_SESSION["user"];

if (authenticateUser($username, $password, $users)) {
  $_SESSION["logged_in"] = true;
  header("Location: Pagina3.php");
  exit();
} else {
  header("Location: Pagina1.html");
  exit();
}

function authenticateUser($username, $password, $users) {
  return isset($users[$username]) && $users[$username] === $password;
}
?>
</body>
</html>