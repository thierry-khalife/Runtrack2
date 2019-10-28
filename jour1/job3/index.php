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
$table = "<table>";
$tablec = "</table>";
$thead = "<thead>";
$theadc = "</thead>";
$tbody = "<tbody>";
$tbodyc = "<tbodyc>";
$tr = "<tr>";
$trc = "</tr>";
$td = "<td>";
$tdc = "</td>";
$th = "<th>";
$thc = "</thc>";
?>

<?php echo "<h1>Table en HTML</h1>"?>
<?php echo "<br>"?>
<table>
    <thead>
        <tr>
            <th><?php echo "Type"?></th>
            <th><?php echo "Nom"?></th>
            <th><?php echo "Valeur"?></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php echo gettype ($bool); ?></td>
            <td><?php echo "Bool"?></td>
            <td><?php echo $bool; ?></td>
        </tr>
         <tr>
            <td><?php echo gettype ($float); ?></td>
            <td><?php echo "Float"?></td>
            <td><?php echo $float; ?></td>
        </tr>
         <tr>
            <td><?php echo gettype ($int); ?></td>
            <td><?php echo "Int"?></td>
            <td><?php echo $int; ?></td>
        </tr>
         <tr>
            <td><?php echo gettype ($string); ?></td>
            <td><?php echo "String"?></td>
            <td><?php echo $string; ?></td>
        </tr>
    </tbody>
</table>
<?php echo "<br>"?>
<?php echo "<h1>Table en FULL PHP</h1>"?>
<?php echo "<br>"?>
<?php 
echo $table;
echo $thead;
echo $tr;
echo $th."Type".$thc;
echo $th."Nom".$thc;
echo $th."Valeur".$thc;
echo $trc;
echo $theadc;
echo $tbody;
echo $tr;
echo $td.gettype ($bool).$tdc;
echo $td."Bool".$tdc;
echo $td.$bool.$tdc;
echo $trc;
echo $tr;
echo $td.gettype ($float).$tdc;
echo $td."Float".$tdc;
echo $td.$float.$tdc;
echo $trc;
echo $tr;
echo $td.gettype ($int).$tdc;
echo $td."Int".$tdc;
echo $td.$int.$tdc;
echo $trc;
echo $tr;
echo $td.gettype ($string).$tdc;
echo $td."String".$tdc;
echo $td.$string.$tdc;
echo $trc;
echo $tbodyc;
echo $tablec;
?>
        
</body>
</html>

