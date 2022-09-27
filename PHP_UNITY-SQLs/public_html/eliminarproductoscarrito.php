<?php
include 'felimproductcarro.php';

$productname = $_POST["productnamePost"];
$uname = $_POST["usernamePost"];
$producttalla = $_POST["tallaPost"];

$res=eliminarproductoCARRITO($productname,$uname,$producttalla);

?>
		
	
	
	