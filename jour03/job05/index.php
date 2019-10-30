<?php  

$str = "On nest pas le meilleur quand on le croit mais quand on le sait";
$dic = array("consonnes" => 0, "voyelles" => 0);
$voyelles =  array("a", "e", "i", "o", "u", "y","O");
$i =0;
$strlength = strlen($str);


while ( $i < $strlength) {
	if(in_array($str[$i], $voyelles)) //in array permet de savoir si notre str[i] existe dans le tableau des voyelles, si oui il nous retourne true
     {
         $dic["voyelles"] =  $dic["voyelles"] + 1;
         
     }
     else {
     	$dic["consonnes"] =  $dic["consonnes"] + 1;
        

     }

      $i++;
  }
     echo "Dans str il existe ".$dic["voyelles"]." voyelles<br>";
     echo "Dans str il existe ".$dic["consonnes"]." consonnes<br>";
   

?>