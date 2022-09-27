<?php
include 'ftiquet.php';

echo "Fent tiquet";
$nomusuari = $_POST["USERPOST"];
$numpedido = $_POST["NPEDIDOPOST"];


$res=impriminttiquet($nomusuari,$numpedido);

?>