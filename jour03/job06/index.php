<?php  

$str = "Les choses que l'on possede finissent par nous posseder.";
$strlength = strlen($str);


while ($strlength > 0) {

	$strlength = $strlength - 1;
	echo $str[$strlength];
  }

?>