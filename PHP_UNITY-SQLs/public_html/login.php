<?php
include 'floginbd.php';
	
$uname = $_POST["usernamePost"];   
$upass = $_POST["passwordPost"];   



$res=loginbd($uname, $upass);

if ($res==9)
{
   // echo($res." ha iniciat");
	echo("Tot OK !!/".$uname."/".$res);
}
if ($res==10)
{	echo("Incorrecte");}

if ($res==3)
{	echo("Incorrecte");}
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
		
	
	
	