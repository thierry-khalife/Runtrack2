<?php  

$str = "Certaines choses changent, et d'autres ne changeront jamais.";
$i =0;
$strlength = strlen($str);


while ($i < $strlength) {
 if ($i == ($strlength-1)) {
 	echo $str[0];
 }
 else{
 	echo $str[$i+1];
 	
 }
 $i++;
 }
?>