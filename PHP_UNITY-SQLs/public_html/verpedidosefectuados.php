<?php
include 'fverpedidosefectuados.php';

$nomusuari = $_POST["usernamePost"];


$res=verpedidosefect($nomusuari);


/*
if ($res==1)
{
	echo("Error connexió");
}
if ($res==2)
{
	echo("Error: Password incorrecte ".$res);
}
if ($res==3)
{
	echo("Error: Usuari desconegut amb l'usuari: ".$uname." i la contrasenya: ".$upass."  ".$res);
}*/

?>
		
	
	
	