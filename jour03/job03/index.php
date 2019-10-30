<?php  

$str = "I'm sorry Dave I'm afraid I can't do that.";
$voyelles =  array("a", "e", "i", "o", "u", "y","I");
$i = 0;
$strlegnth = strlen($str);


while ($i < $strlegnth) {
    if(in_array($str[$i], $voyelles)) //in array permet de savoir si notre str[i] existe dans le tableau des voyelles, si oui il nous retourne true
     {
         echo $str[$i];
     }
    $i++;
}
?>