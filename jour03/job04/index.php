<?php  

$str = "Dans l'espace, personne ne vous entend crier";
$cpt=0;
$i =0;
$strlength = strlen($str);


while ( $i < $strlength) {
	if (empty($str) == false)
    {
	   $cpt = $cpt + 1;
    }
	$i++;
    }

 echo $cpt;

?>