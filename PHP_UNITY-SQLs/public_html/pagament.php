<?php
include 'fpagament.php';
echo("Holaaaa");

$uname = $_POST["usernamePOST"];
$numpedido = $_POST["numoediddoPOST"];

echo("Holaaaa");
$res=pagamentPedido($uname,$numpedido);



?>
		
	
	
	