<?php  

$table = array(200, 204, 173, 98, 171, 404, 459);
$i=0;
$tablelength = sizeof($table);

for($i; $i < $tablelength;$i++)
{
 if (($table[$i] % 2) == 0)
 {
 echo $table[$i]." est un nombre paire <br>";
 }
 else
{
 echo $table[$i]." est un nombre impaire <br>";
 }
}

?>