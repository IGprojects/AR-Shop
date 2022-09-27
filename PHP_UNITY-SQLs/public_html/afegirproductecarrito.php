<?php
include 'fafegirproductecarrito.php';

$idproducte = $_POST["idproductePost"];
$nomusuari = $_POST["usernamePost"];
$talla = $_POST["tallaPost"];


$res=afegirproductecarrito($idproducte,$nomusuari,$talla);



?>
		
	
	
	