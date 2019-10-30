<?php  

$str = "I'm sorry Dave I'm afraid I can't do that.";
$voyelles =  array("a", "e", "i", "o", "u", "y","I");
$i = 0;
$strlegnth = strlen($str);


while ($i < $strlegnth) {
    if($str[$i] == in_array($str[$i], $voyelles))
     {
         echo $str[$i];
     }
     else {
     	 $verif = false;
     }
    $i++;
}
?>