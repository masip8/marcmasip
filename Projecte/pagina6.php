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
$cursos = array("PHP" => "Curso de PHP", "Javascript" => "Curso de JavaScript", "HTML" => "Curso de HTML y CSS");
echo "<ul>";
foreach ($cursos as $key => $curso) {
  echo "<li>" . $curso . "</li>";
}
echo "</ul>";
?>
    </body>
</html>
