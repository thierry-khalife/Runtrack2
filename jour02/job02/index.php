<?php  

$nbr = 0;

while ( $nbr <= 1337) {

	if ($nbr == 26 || $nbr == 37 || $nbr == 88 || $nbr == 1111 || $nbr == 3233) {
	     $nbr++;
	}
	else{
		 echo $nbr;
	     echo "<br />";
	     $nbr++;
	}
}

?>