<!DOCTYPE html>
<html>
<head>
	<title>Job 07 - Jour 04</title>
</head>
<body>

<form  action="index.php" method="get">
             <label>Hauteur : </label>
             <input type="text" name="hauteur" />
             <label>Largeur : </label>
             <input type="text" name="largeur" />
             <input  type="submit" value="OK">
</form>

<?php
if($_GET == true)
{
  if ($_GET["hauteur"]== 10  && $_GET["largeur"] == 5) {
  	echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/\ <br>";
    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/__\ <br>";
    echo "&nbsp;&nbsp;&nbsp;&nbsp;/____\ <br>";
    echo "&nbsp;&nbsp;/______\ <br>";
    echo " /________\ <br>";
    echo " |&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;| <br>";
    echo " |&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;| <br>";
    echo " |&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;| <br>";
    echo " |&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;| <br>";
    echo " |________| <br>";
  }

}

?>

</body>
</html>
