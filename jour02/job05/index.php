<?php

$nbr = 0;
$nbdiv = 2; 

while ($nbr <= 1000) {
    if ($nbr != 1)
    {
        while ($nbr % $nbdiv != 0)
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