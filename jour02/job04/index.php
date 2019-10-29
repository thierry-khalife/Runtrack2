<?php  

$nbr = 0;

while ( $nbr <= 100) {
   if ($nbr % 3 == 0)
   {
    echo "Fizz";
    echo "<br />";
   }
   if ($nbr % 5 == 0)
   {
    echo "Buzz";
    echo "<br />";
   }
   if ($nbr % 3 == 0 && $nbr % 5 == 0)
   {
    echo "FizzBuzz";
    echo "<br />";
   }

    echo $nbr;
    echo "<br />";
    $nbr++;
    
}

?>