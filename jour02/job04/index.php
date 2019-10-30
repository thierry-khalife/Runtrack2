<?php  

$nbr = 0;

while ( $nbr <= 100) {

   if ($nbr % 3 == 0 && $nbr % 5 == 0) //si le modulo 3 egal a 0 le modulo 5 egal a 0 on affiche fizzbuzz 
   {
    echo "FizzBuzz";
    echo "<br />";
    $nbr++;
   }
   elseif ($nbr % 3 == 0) //si le modulo 3 egal a 0 et le modulo 5 different de 0 on affiche fizz 
   {
    echo "Fizz";
    echo "<br />";
    $nbr++;
   }
   elseif ($nbr % 5 == 0) //si le modulo 5 egal a 0 le modulo 3 different de 0 on affiche buzz 
   {
    echo "Buzz";
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