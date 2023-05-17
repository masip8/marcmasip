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
  
  if (isset($_POST['search'])) {
    
    $search = $_POST['search'];

   
    $cursos = array(
      array(
        'nombre_curso' => 'Curso de PHP',
        'descripcion' => 'Aprende a programar en PHP desde cero.'
        
      ),
      array(
        'nombre_curso' => 'Curso de JavaScript',
        'descripcion' => 'Aprende a programar en JavaScript y a crear interactividad en tus páginas web.'
      ),
      array(
        'nombre_curso' => 'Curso de HTML y CSS',
        'descripcion' => 'Aprende a crear páginas web estéticas y bien estructuradas con HTML y CSS.'
      ),
    );

    
    $resultados = array();
    foreach ($cursos as $curso) {
      if (strpos($curso['nombre_curso'], $search) !== false || strpos($curso['descripcion'], $search) !== false) {
        $resultados[] = $curso;
      }
    }

    if (count($resultados) > 0) {
      echo "<table>";
      echo "<tr>";
      echo "<th>Nombre del curso</th>";
      echo "<th>Descripción</th>";
      echo "</tr>";
      foreach ($resultados as $resultado) {
        echo "<tr>";
        echo "<td>" . $resultado['nombre_curso'] . "</td>";
        echo "<td>" . $resultado['descripcion'] . "</td>";
        echo "</tr>";
      }
      echo "</table>";
    } else {
      echo "No se encontraron resultados para la búsqueda.";
    }
  }
?>

<form action="" method="post">
  <input type="text" name="search">
  <input type="submit" value="Buscar">
</form>
    </body>
</html>
