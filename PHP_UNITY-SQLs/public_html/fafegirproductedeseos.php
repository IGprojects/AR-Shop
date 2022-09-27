<?php
	
	function carregarproductedeseo($idproducte,$nomusuari)
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
		
			
		$sql1 = "SELECT listadeseos.ID_Usuari,listadeseos.ID_Producte FROM `listadeseos` inner join usuari on listadeseos.ID_Usuari=usuari.ID_Usuari where listadeseos.ID_Producte=".$idproducte." and usuari.Nom_Usuari='".$nomusuari."';";

		$sql2 = "DELETE l.* FROM `listadeseos` l INNER JOIN usuari on l.ID_Usuari=usuari.ID_Usuari where usuari.Nom_Usuari='".$nomusuari."' and l.ID_Producte=".$idproducte.";";

		$sql3 = "INSERT INTO `listadeseos`(`ID_Usuari`, `ID_Producte`) VALUES ((SELECT ID_Usuari FROM usuari WHERE usuari.Nom_Usuari='".$nomusuari."'),".$idproducte.");";


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
		
	
	