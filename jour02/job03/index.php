<?php  

$nbr = 0;

while ( $nbr <= 100) {
    for ($nbr; $nbr<=20; $nbr++) { //boucle for qui couvre l'interval entre 0 et 20 (qui peut etre remplacer par un if dans ce cas)
        echo "<i>".$nbr."</i>";
		echo "<br />";
    }
    for ($nbr; $nbr<25; $nbr++) {  //boucle for qui couvre l'interval entre 20 et 25 (qui peut etre remplacer par un if dans ce cas)
        echo $nbr;
		echo "<br />";
    }
    for ($nbr; $nbr<=50; $nbr++) { //boucle for qui couvre l'interval entre 25 et 50 (qui peut etre remplacer par un if dans ce cas)
        if ($nbr == 42) {
			echo "LaPlateforme_";
			echo "<br />";
		}
		else{
			echo "<u>".$nbr."</u>";
	        echo "<br />";
		}
    } 
    echo $nbr;  // affichage nombres entre 50 et 100
    echo "<br />";
    $nbr++;
}

?>