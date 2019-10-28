<!DOCTYPE html>
<html>
<head>
	<title>Table variables</title>
</head>
<body>
<?php  

$bool = true;
$float = 1.5;
$int = 10;
$string = "LaPlateforme";

?>
<table>
    <thead>
        <tr>
            <th>Type</th>
            <th>Nom</th>
            <th>Valeur</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php echo gettype ($bool); ?></td>
            <td>Booleen</td>
            <td><?php echo $bool; ?></td>
        </tr>
         <tr>
            <td><?php echo gettype ($float); ?></td>
            <td>Float</td>
            <td><?php echo $float; ?></td>
        </tr>
         <tr>
            <td><?php echo gettype ($int); ?></td>
            <td>Entier</td>
            <td><?php echo $int; ?></td>
        </tr>
         <tr>
            <td><?php echo gettype ($string); ?></td>
            <td>Chaîne de caractères</td>
            <td><?php echo $string; ?></td>
        </tr>
    </tbody>
</table>
</body>
</html>

