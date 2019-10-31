
<!DOCTYPE html>
<html>
<head>
	<title>Job 01 - Jour 04</title>
</head>
<body>

<form  action="index.php" method="get">
             <label>Votre nom : </label>
             <input type="text" name="nom" />
             <label>Mot De Passe : </label>
             <input type="password" name="mdp" />
             <label>Email : </label>
             <input type="email" name="email" />
             <label>Age :</label>
             <input type="text" name="age" />
             <input  type="submit" value="OK">
</form>

<?php
$i = 0;
foreach ($_GET as $value) {
$i++;
}
echo $i;
?>

</body>
</html>
