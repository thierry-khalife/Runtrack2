<!DOCTYPE html>
<html>
<head>
	<title>Job 07 - Jour 04</title>
</head>
<body>

<form  action="index.php" method="get">
<label>Hauteur : </label>
<input type="text" name="hauteur" required/>
<label>Largeur : </label>
<input type="text" name="largeur" required/>
<label>Couleur (red ou #FF0000 pour rouge) : </label>
<input type="text" name="couleur" required/>
<input  type="submit" value="OK">
</form>

<?php
 
$i=0;
$b=0;
$underscore="";
$space="";
$i2=0;
$i5=0;
if($_GET==true)
{
     $hauteur=$_GET["hauteur"];
     $largeur=$_GET["largeur"];
     $couleur=$_GET["couleur"];
     $toit = ($largeur / 2) -1; 
        //toit
        $k=0;
        
        for($i = 1; $i <= $toit ; $i++)
        {
          if ($i == 1) {
            echo "&nbsp&nbsp&nbsp&nbsp";
            for($first = 0; $first < $toit; $first++)
            {
            echo "&nbsp&nbsp";
            }
            echo "<span style = color:".$couleur.";>/\\</span></br>";
            
          }
        
        echo "&nbsp&nbsp&nbsp&nbsp";
        $k = 0;
        for($b = 0; $b < $toit-$i; $b++)
        {
            echo "&nbsp&nbsp";
        }
        echo "<span style = color:".$couleur.";>/</span>";
        for($c = 2*$i ; $c > 0 ; $c--)
        {  
            echo "<span style = color:".$couleur.";>_</span>";
        }
        echo "<span style = color:".$couleur.";>\\</span>";
        echo "<br>";
        }    
        //base maison
        $base=0;
        while($base< $hauteur - 1)
        {
          echo "&nbsp&nbsp&nbsp&nbsp";
          echo "<span style = color:".$couleur.";>|</span>";
          for ($t=0; $t < $largeur-2; $t++) { 
          	echo "&nbsp&nbsp";
          }
          echo "<span style = color:".$couleur.";>|</span><br>";
          $base++;
        }
        //Terre
        $end=0;
        while($end<1)
        {
          echo "&nbsp&nbsp&nbsp&nbsp";
          echo "<span style = color:".$couleur.";>|</span>";
          for ($t=0; $t < $largeur-2 ; $t++) { 
          	echo "<span style = color:".$couleur.";>_</span>";
          }
          echo "<span style = color:".$couleur.";>|</span><br>";
          $end++;
        }

}

?>

</body>
</html>


