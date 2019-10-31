<!DOCTYPE html>
<html>
<head>
	<title>Job 02 - Jour 04</title>
</head>
<body>

<form  action="index.php" method="get">
             <label>Votre nom : </label>
             <input type="text" name="Nom" />
             <label>Mot De Passe : </label>
             <input type="password" name="Mdp" />
             <label>Email : </label>
             <input type="email" name="Email" />
             <label>Age :</label>
             <input type="text" name="Age" />
             <input  type="submit" value="OK">
</form>

<?php

echo "<table><thead><tr><th>Arguments</th><th>Valeurs</th></tr></thead><tbody>";
foreach ($_GET as $cle => $value) {
echo "<tr><td>".$cle."</td><td>".$value."</td></tr>";
}
echo "</tbody></table>";
?>

</body>
</html>