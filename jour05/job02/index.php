<?php

function bonjour($jour)
{
  if ($jour == true) {
  	echo "Bonjour<br>";
  }
  else {
  	echo "Bonsoir<br>";
  }
}

/*Test sans variable*/
echo bonjour(true);
echo bonjour(false);


/*Test avec variable*/
$variable = false;
echo bonjour($variable);

?>