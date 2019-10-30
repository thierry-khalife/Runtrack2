<!DOCTYPE html>
<html>
<head>
	<title>Consonnes & Voyelles</title>
</head>
<body>
<?php  

$str = "On nest pas le meilleur quand on le croit mais quand on le sait";
$dic = array("consonnes"=>["b", "c", "d", "f", "g", "h", "j", "k", "l", "m", "n", "p", "q", "r", "s", "t","v", "w", "x", "z"],"voyelles"=>["a", "e", "i", "o", "O", "u","y"]);
$cpt = array("consonnes" => 0, "voyelles" => 0);
$i =0;
$strlength = strlen($str);
$voylen = sizeof($dic["voyelles"]);
$consolen = sizeof($dic["consonnes"]);

while ( $i < $strlength) {

	if ($str[$i] == " ") {
		
	}
	else {
    for($v = 0; $v < $voylen; $v++)
    {
         if ($str[$i] == $dic["voyelles"][$v])
         	{
                $cpt["voyelles"] =  $cpt["voyelles"] + 1;
            }
    }
    for($v = 0; $v < $consolen; $v++)
    {
         if ($str[$i] == $dic["consonnes"][$v])
         	{
                $cpt["consonnes"] =  $cpt["consonnes"] + 1;
            }
    }
}
      $i++;
 }
?>
<table>
    <thead>
        <tr>
            <th><?php echo "Voyelles"?></th>
            <th><?php echo "Consonnes"?></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php echo $cpt["voyelles"]; ?></td>
            <td><?php echo $cpt["consonnes"];?></td>
        </tr>
    </tbody>
</table>

</body>
</html>
