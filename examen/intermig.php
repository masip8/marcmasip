<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <p>Ex.1</p>
        <?php
       
    $aleatori = rand (1,6);
    print "El num aleatori generat és: $aleatori";
        ?>
        
        <p>Ex.2</p>
        
         
         <?php
         print "<img src=\"img/$aleatori.svg\"></img>";
         
        ?>
        <p>Ex.3</p>
        <?php
        $costat = 100;
        $perimetre = $costat * 4;
        $area = $costat * $costat;
        print "<ul>La mida del cuadrat es $costat</ul>";
        print "<ul>El perimetre del cuadrat es $perimetre</ul>";
        print "<ul>L'area del quadrat es $area</ul>";
        ?>
        <svg width=200 height=200>
        <rect x=10 y=10 width=<?php print $costat;?> height=<?php print $costat;?> stroke="black" stroke-width=2 fill="white"/>
        </svg>
        <p>Ex.4</p>
       <?php
       
       $aleatorio = rand(5,100);
       print "<svg width=200 height=200>";
       print "<circle cx=100 cy=100 r=$aleatorio stroke=\"blue\" stroke-width=2 fill=\"orange\">";
       print "</svg>";
       ?>
        <p>Ex.5</p>
       <?php
       $linea = rand(10,100)
       ?>
        <progress id="file" max="100" value= <?php print $linea?> <?php print $linea?> </progress>;
            <p>Ex.6</p>
            <?php
            
            ?>
            
           </body>
</html>


