<?php 
  $n=$_GET['num'];
  $ult=1;
  $penul=0;

  echo "0<br />1<br />";
  for($count=1 ; $count<=$n-2 ; $count++){
   $at = $ult + $penul;
   echo $at."<br />";

   $penul = $ult;
   $ult = $at;
  } 
 ?>