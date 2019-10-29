<?php  

$nbr = 0;

while ( $nbr <= 1337) {

	if ($nbr == 42) { //si le nombre est egal a 42 on va le mettre en bold et le souligner
		 echo "<b><u>".$nbr."</b></u>";
	     echo "<br />";
	     $nbr++;
	}
	else{ //pour les autres nombres on affiche en style normal
		 echo $nbr;
	     echo "<br />";
	     $nbr++;
	}
}

?>