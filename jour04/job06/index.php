<!DOCTYPE html>
<html>
<head>
	<title>Job 06 - Jour 04</title>
</head>
<body>

<form  action="index.php" method="get">
             <label>Nombre : </label>
             <input type="text" name="nombre" />
             <input  type="submit" value="OK">
</form>

<?php

foreach($_GET as $value)
{
 if (($value % 2) == 0)
 {
 echo $value." est un nombre paire <br>";
 }
 else
{
 echo $value." est un nombre impaire <br>";
 }
}

?>

</body>
</html>
