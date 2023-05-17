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
        /* exemple*/
        for ($i = 1; $i <= 10; $i++) {
        echo "<p>$i</p>";
        }
?>
           <?php
/*exemple 2*/
print "<p>Comienzo</p>";
for ($i = 0; $i < 3; $i++) {
    print "<p>$i</p>";
}
print "<p>Final</p>";
?>
          <?php
/* exemple 3*/
for ($i = 1; $i <= 10; $i++) {
    echo "<h$i> $i </h$i>";
}
?>
          <?php
       // /n serveix per ordenar el codi, no es res visual
print "<p>Comienzo</p>\n";
for ($i = 1; $i < 6; $i = $i + 2) {
    print "<p>$i</p>\n";
}
print "<p>Final</p>\n";
?>
    </body>
</html>
