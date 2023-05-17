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

    $credentials = array(
        "usuario1" => "contraseña1",
        "usuario2" => "contraseña2"
    );

    if (!empty($username) && !empty($password)) {
        $credentials[$username] = $password;
        $_SESSION["user"] = $credentials;
        header("Location: Pagina1.html");
        die();
    } else {
         header("Location: Pagina1.html");
        die();
       
    }
?>
    </body>
</html>