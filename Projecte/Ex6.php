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

$change_me = [3, 6, 9,"dotze",15];

$change_me[0] = "tadpole";

foreach ($change_me as $value) {
    print"<br>";
    print $value;
}
?>
    </body>
</html>
