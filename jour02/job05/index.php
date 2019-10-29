<?php  

$nbr = 0;


      /*
      while ( $nbr <= 1000) {$nbdiv=1;
      if(($nbr>=0))
      {
      for($i=3; $i<=$nbr; $i++)
      {
      $rest=$nbr%$i;
      if($rest==0)
      $nbdiv++;
      }
      if($nbdiv == 2)
      echo "<br>".$nbr." est premier";
      else
      echo "<br>".$nbr." n'est pas premier";

      }
      $nbr++;
      }
      */
  while ($nbr <= 1000) {
  if ($nbr == 1) {
  echo $nbr.' n\'est pas un nombre premier<br>';
  $nbr++;
  continue;
  }
  $a = 0;
  for ($i=2; $i<$nbr; $i++){
  
    if (is_int($nbr/$i)){
    $a++;
    echo $nbr.' n\'est pas un nombre premier<br>';
    break;
    }
  }
  if ($a == 0) echo '<b>'.$nbr.' est un nombre premier</b><br>';
  $nbr++;
  }

?>