<html>
    <body>
<?php
    $majorbase=$_GET["majorbase"];
    $minorbase=$_GET["minorbase"];
    $alturap = $_GET["alturap"];
    $alturaT = $_GET["alturaT"];
    $areabasepiramide = $_GET["areabase"];
    $a2 = 2;
    $a3=3;
    

    echo 'A area do trapezio eh: ' .($minorbase + $majorbase)*$alturaT/$a2;
    echo 'O volume da piramide eh' .$areabasepiramide*$alturap/$a3;

?> 
</body>
</html>