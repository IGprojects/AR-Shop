<?php
	
	function afegirproductecarrito($idproducte,$nomusuari,$talla)
	{
		include 'namesbbdd.php';
		$_Ret = 0;
		//Make Connection
		$conn = new mysqli($serverdbname, $serverdbusername, $serverdbpassword, $dbName);
		//Check Connection
		if(!$conn){
			die("Connection Failed. ". mysqli_connect_error());
			$_Ret = 1;
		}
		if ($_Ret == 0)
		{
		
			
		$sql1 = "SELECT * FROM `carrito` WHERE carrito.ID_Usuari=(SELECT ID_Usuari FROM usuari WHERE usuari.Nom_Usuari='".$nomusuari."') and ID_Producte='".$idproducte."' AND Talla='".$talla."';";

		$sql2 = "UPDATE carrito set carrito.Quantitat=carrito.Quantitat+1 where Talla='".$talla."' and ID_Producte='".$idproducte."' and ID_Usuari=(SELECT ID_Usuari FROM usuari where usuari.Nom_Usuari='".$nomusuari."');";

		$sql3 = "INSERT INTO carrito values ((SELECT usuari.ID_Usuari from usuari WHERE usuari.Nom_Usuari='".$nomusuari."'),".$idproducte.",'".$talla."',1);";


		$result1 = mysqli_query($conn ,$sql1);

		if (mysqli_num_rows($result1)>0){
				$result2 = mysqli_query($conn ,$sql2);
		}
		else{
			$result3 = mysqli_query($conn ,$sql3);
		}
		  
		 }
	 return($_Ret);
	}
?>
		
	
	