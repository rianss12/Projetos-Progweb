<?php 
  $one = $_GET['a'];
  $two = $_GET['b'];
  $three = $_GET['c'];

  if( ($one+$two> $three)&&($one+ $three>$two)&&($two+ $three>$one) ){
   if($one==$two && $two== $three)
    echo "Triangulo equilatero";
   elseif ($one==$two || $one== $three ||$two== $three)
    echo "Triangulo isosceles";
   else
    echo "Triangulo escaleno";
  }else
   echo "O triangulo nao existe";
 ?>