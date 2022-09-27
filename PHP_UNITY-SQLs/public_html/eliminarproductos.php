<?php
include 'felimproduct.php';

//echo "Estic Dins";
$pname = $_POST["productnamePost"];
$uname = $_POST["usernamePost"];


$res=eliminarproducto($pname,$uname);
//echo "Estic Dins despues de la funcio";


?>
		
	
	
	