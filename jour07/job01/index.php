<?php

session_start();

if(!isset($_SESSION['nbvisites']))
{
$_SESSION['nbvisites']= 0;
}
elseif (isset($_POST["dc"]) == false){
	$_SESSION['nbvisites']++;
}

if (isset($_POST["dc"])){
	session_destroy();
	$_SESSION['nbvisites']= 0;
}
echo $_SESSION['nbvisites'];

?>

<form action="index.php" method="post">
	  <input name="dc" value="Reset Counter" type="submit" />
</form>


<button><a href="index.php">Clean POST</a></button>
