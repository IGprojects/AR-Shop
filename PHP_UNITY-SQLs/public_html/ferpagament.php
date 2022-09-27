<?php
include 'fpagamentv2.php';

$nomusuari = $_POST["USERPOST"];
$numpedido = $_POST["NPEDIDOPOST"];

echo($nomusuari);

$res=realitzarpagament($nomusuari,$numpedido);

?>
		
	
	
	