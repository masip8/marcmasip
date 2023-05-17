<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       <?php
       //EX.1
$salutacio = "hola";
print $salutacio[0];
print "<hr>";
//Mostra una "h" subrayada fins l'altre costat de la pagina
?>
        <?php
        //EX.2
$edat = 16;
$mes = 12 * 16;   
print "<p> Tinc $edat anys, que són $mes mesos </p> "
?>
        <?php
        //EX.3
$nom = "Jordi";
$cognom1 = "Gómez";
$cognom2 = "Ricart";
print "<p>La variable \$nom conté el meu nom que és Jordi, la variable \$cognom1 conté el meu primer cognom que és Gómez i la variable \$cognom2 conté el meu segon cognom que és Ricart</p>";
?>
        <?php
        //EX.4
$nom = "Pol";
$cognom1 = "Riba";
$cognom2 = "Sánchez";
$nomsencer = "$nom $cognom1 $cognom2";
print "<p>Em dic $nomsencer</p>\n";
?>
      <?php
      //EX.5
        $dia = "1";
$mes = "10";
$any = "2021";
$data = "$dia / $mes / $any";
print "<p>Avui és $data</p>\n";
?>
<?php
//EX.6
    $a = 50;
    $b = 75;
    print  "<p> SUMA = " . ($a + $b);
    print "<p> RESTA = " . ($a - $b);
    print "<p> DIVISIÓ = " . ($b / $a);
    print "<p> MULTIPLICACIÓ = " . ($a * $b);
?>
        <?php
        //EX.7
$a = 10;
//$a = $a + 1;
$a++;
print "<p>$a</p>";
?>
        <?php
        //EX.8
$a = 1;
$b = 20;
$c = $a;
$a = $b;
$b = $c;
print "El valor de a és $a i el valor de b és $b";
?>
        <?php
        //EX.9
        $preu1 = 5;
        $preu2 = 10;
        $preu3 = 15;
        $mitjana = ($preu1 + $preu2 + $preu3) /3;
        print "<p> La mitjana dels tres preus es $mitjana </p>";
        ?>
        
        	<?php
                //EX.10
  $a = 4;
	$b = 5;
	$c = 6;
	print "Igual?     ".($a == $b)."<br>";
	print "Diferent   ".($a != $b). "<br>";
	print "Mes petit  ".($a < $b). "<br>";
	print "Mes gran   ".($a > $b). "<br>";
	print "Mes gran o igual    ".($a >= $c). "<br>";
	print "Mes petit o igual   ".($a <= $c). "<br>";
        // Aquest codi et diu si el que diu el text es compleix en les operacions sent cert un 0 i fals un  1
  ?>
    </body>
</html>
