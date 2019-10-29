<?php  

$nbr = 0;

while ( $nbr <= 1337) {

	if ($nbr == 26 || $nbr == 37 || $nbr == 88 || $nbr == 1111 || $nbr == 3233) { /*verification des conditions si une de ces conditions est valider on n'affiche pas le nombre, on incremente et on passe a la suite*/
	     $nbr++;
	}
	else{ //pour le reste on affiche le nombre et on passe a la ligne
		 echo $nbr;
	     echo "<br />";
	     $nbr++;
	}
}

?>