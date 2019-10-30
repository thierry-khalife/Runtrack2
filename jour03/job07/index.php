<?php  

$str = "Certaines choses changent, et d'autres ne changeront jamais.";
$first = $str[0];
$i =0;
$strlength = strlen($str) - 1 ;


while ($i <= $strlength) {
if ($i == $strlength) {
	$str[$strlength] = $first;
}
else{
	$str[$i] = $str[$i+1];
}
 $i++;
 }
 echo $str;
?>