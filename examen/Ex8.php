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
        $stack = ["wild success", "failure", "struggle"];
        array_push($stack,"blocker","impediment");
        print_r($stack);
        print $;
        array_pop($stack);print"<br>";
        
        print_r($stack);
        ?>
    </body>
</html>
