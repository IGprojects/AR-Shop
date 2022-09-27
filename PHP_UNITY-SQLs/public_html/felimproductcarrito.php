<?php
	//FER EL PROCEDIMENT DE PAGAMENT
	function eliminarproductocarrito($uname,$numpedido)
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
		
				//Actualitzar les monedas del moneder
				$sql1 = "SELECT SUM(producte.Preu*Quantitat)-M2.Moneda as total FROM `carrito` 
				inner join usuari as M2 on carrito.ID_Usuari=M2.ID_Usuari 
				inner join producte on carrito.ID_Producte=producte.ID_Producte 
				where M2.Nom_Usuari='"$uname"'";

				$result = mysqli_query($conn ,$sql1);
				if (mysqli_num_rows($result)>0) 
		  		{
			 		while($row=$result->fetch_assoc()){
							  
						$NouMoneder=$row['total'];                    
			 		}
					echo($NouMoneder);
					
					$sql2 = "UPDATE usuari SET Moneda=$NouMoneder where usuari.Nom_Usuari='".$username."'";
					$result = mysqli_query($conn ,$sql2);


					//Crear Pedido i linies Pedido amb les dades del carrito
					$sql3 = "INSERT INTO `pedido`(`ID_Pedido`, `ID_Usuari`, `DataSortida`, `DataArribada`, `Estat`) VALUES ('".."',(SELECT ID_Usuari from usuari u WHERE u.Nom_Usuari='".."'),CURDATE(),null,1)";
					//$sql4 = "";


					//Borrar productes del carrito
					$sql5 = "DELETE l.* FROM carrito l inner join usuari u on l.ID_Usuari=u.ID_Usuari 
					WHERE (u.Nom_Usuari='".$uname."')";
					$result = mysqli_query($conn ,$sql5);


				}
		 }
	 return($_Ret);
	}
?>

	
			