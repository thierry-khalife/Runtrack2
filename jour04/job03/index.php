<!DOCTYPE html>
<html>
<head>
	<title>Job 03 - Jour 04</title>
</head>
<body>

<form  action="index.php" method="post">
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
foreach ($_POST as $value) {
$i++;
}
echo $i;
?>

</body>
</html>
