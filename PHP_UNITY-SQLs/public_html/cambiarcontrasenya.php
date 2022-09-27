<?php
include 'fcambiarcontrasenya.php';

$username = $_POST["usernamePost"];
$passold = $_POST["oldpassPost"];
$passnew = $_POST["newpassPost"];

$ContrasenyaNOVA_Hasheada=password_hash($passnew,PASSWORD_DEFAULT);
//$Contrasenya_Hasheada2=password_hash($oldpassPost,PASSWORD_DEFAULT);

//echo $Contrasenya_Hasheada2;
$res=cambiarcontra($username,$passold,$ContrasenyaNOVA_Hasheada);

?>
		
	
	
	