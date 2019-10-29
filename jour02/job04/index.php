<?php  

$nbr = 0;

while ( $nbr <= 100) {
   if ($nbr % 3 == 0 && $nbr % 5 != 0)
   {
    echo "Fizz";
    echo "<br />";
    $nbr++;
   }
   elseif ($nbr % 5 == 0 && $nbr % 3 != 0)
   {
    echo "Buzz";
    echo "<br />";
    $nbr++;
   }
   elseif ($nbr % 3 == 0 && $nbr % 5 == 0)
   {
    echo "FizzBuzz";
    echo "<br />";
    $nbr++;
   }
   else{
    echo $nbr;
    echo "<br />";
    $nbr++;
   }   
}

?>