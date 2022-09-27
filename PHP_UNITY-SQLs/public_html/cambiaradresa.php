<?php
include 'fcambiaradressa.php';

$username = $_POST["usernamePost"];
$AdresaNova = $_POST["newaddresPost"];


$res=cambiaradressa($username,$AdresaNova);

?>
		
	
	
	