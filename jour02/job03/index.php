<?php  

$nbr = 0;

while ( $nbr <= 100) {
	
	while ($nbr >= 0 && $nbr <= 20) {
		 echo "<i>".$nbr."</i>";
		 echo "<br />";
	     $nbr++;
	}
	while ($nbr >= 25 && $nbr <= 50){
		if ($nbr == 42) {
			echo "LaPlateforme_";
			echo "<br />";
			$nbr++;
		}
		else{
			echo "<u>".$nbr."</u>";
	        echo "<br />";
	        $nbr++;
		}
		 
	}
}

?>