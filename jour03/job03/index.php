<?php  

$str = "I'm sorry Dave I'm afraid I can't do that.";
$voyelles =  array("a", "e", "i", "o", "u", "y","I");
$i = 0;
$strlegnth = strlen($str);
$voylen = sizeof($voyelles);

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
   for($v = 0; $v < $voylen; $v++)
    {
         if ($str[$i] == $voyelles[$v])
         	{
                echo $str[$i];
            }
    }
    $i++;
}
    
?>