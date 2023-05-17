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
$my_array = ["tic", "tac", "toe"];
array_pop($my_array); 
// $my_array is now ["tic", "tac"]
$popped = array_pop($my_array); 
// $popped is "tac"
// $my_array is now ["tic"]

$new_array2 = ["eeny"];
$num_added2 = array_push($new_array2, "meeny", "miny", "moe"); 
echo $num_added2; // Prints: 4
echo implode(", ", $new_array2); // Prints: eeny, meeny, miny, moe
print "<br>";
print "El \array_pop et treu l'ultim element de l'array, i el \array_push els afegeix"
?>
    </body>
</html>
