<?php 

$cnx = mysqli_connect("localhost", "root", "", "jour08");

$requete1 = "SELECT COUNT(*) AS nb_etudiants FROM etudiants";

$query1 = mysqli_query($cnx , $requete1);

$resultat = mysqli_fetch_all($query1,MYSQLI_ASSOC);

mysqli_close($cnx);

?>

<html>
    <head>
        <meta charset="utf-8" />
        <title>Job06</title>
    </head>
    <body>
        <table border>
              <thead>
                <tr>
                  <?php 
                  $taille = sizeof($resultat) - 1;
                    foreach ($resultat[$taille] as $key => $value) {
                      echo "<th>{$key}</th>";
                    }
                  ?>
                </tr>
              </thead>
              <tbody>
                  <?php
                  echo "<tr>";
                  foreach ($resultat[$taille] as $key => $value) {
                  echo "<th>{$value}</th>";
                  }
                  echo "</tr>";
                  ?>
              </tbody>
        </table>
    </body>
</html>