<?php
include 'fregistrerbd.php';
	
$nomusuari = $_POST["POSTnomusuari"];   
$nom_apellidos = $_POST["POSTnom_apellidos"];  
$gmail = $_POST["POSTgmail"];   
$contrasenya = $_POST["POSTcontrasenya"];  
$Tel = $_POST["POSTTel"];  
$adreca = $_POST["POSTadreca"];   
$provincia = $_POST["POSTprovincia"];   
$pais = $_POST["POSTpais"];  
$ciutat = $_POST["POSTciutat"];  
$cp = $_POST["POSTcp"];  

$res=registrerbd($nomusuari,$nom_apellidos,$gmail,$contrasenya,$Tel,$adreca,$provincia,$pais,$ciutat,$cp);

echo($res);


?>
		
	
	
	