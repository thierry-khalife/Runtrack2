<?php  

$nbr = 0;

while ( $nbr <= 100) {
    for ($nbr; $nbr<=20; $nbr++) {
        echo "<i>".$nbr."</i>";
		echo "<br />";
    }
    for ($nbr; $nbr<25; $nbr++) {
        echo $nbr;
		echo "<br />";
    }
    for ($nbr; $nbr<=50; $nbr++) {
        if ($nbr == 42) {
			echo "LaPlateforme_";
			echo "<br />";
		}
		else{
			echo "<u>".$nbr."</u>";
	        echo "<br />";
		}
    } 
    echo $nbr;
    echo "<br />";
    $nbr++;
}

?>