<?php

$nbr = 0;
$nbdiv = 2; 

while ($nbr <= 1000) { // boucle pour sortir touts les nombres premier jusqu'a 1000
    if ($nbr != 1) //verification que le nombre est different de 1 pour eviter boucle infini
    {
        while ($nbr % $nbdiv != 0) /*modulo du nbr par nbdiv, tant que le modulo est different de 0 on continue le processus jusqu'a ce qu'on tombe sur un 0 pour le modulo et si ce nombre est egal a notre nombre nbr on peut conclure que ce nbr est un nombre premier */
        {
            $nbdiv++;
        }
        if ($nbr == $nbdiv)
        { 
            echo $nbr." <br/>";
        }

        $nbdiv = 2;
    }

    $nbr++;
}

?>