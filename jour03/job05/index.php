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


while ( $i < $strlength) {
	if(in_array($str[$i],$dic["voyelles"])) //in array permet de savoir si notre str[i] existe dans le tableau des voyelles, si oui il nous retourne true
     {
         $cpt["voyelles"] =  $cpt["voyelles"] + 1;
         
     }
     else {
     	$cpt["consonnes"] =  $cpt["consonnes"] + 1;
        

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
