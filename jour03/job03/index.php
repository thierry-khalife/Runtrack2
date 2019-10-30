<?php  

$str = "I'm sorry Dave I'm afraid I can't do that.";
$voyelles =  array("a", "e", "i", "o", "u", "y","I");
$i = 0;
$v = 0;
$strlegnth = strlen($str);


/*while ($i < $strlegnth) {
		 foreach ($voyelles as $voy){
		 	   if($str[$i] == $voy) {
                echo $str[$i];
            }
		 }
		  $i++;
    }*/

while ( $i < $strlegnth )
{
    while ($str[$i] != $voyelles[$v] && $v < 6)
    {
        $v++;
    }

    if ($str[$i] == $voyelles[$v])
    {
        echo $str[$i];
    }

    $i++;
    $v = 0;
}
    
?>