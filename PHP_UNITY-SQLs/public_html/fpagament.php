<?php
	//FER EL PROCEDIMENT DE PAGAMENT
	function pagamentPedido($uname,$numpedido)
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
				echo("Estic dins");
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
					
					/*$sql2 = "UPDATE usuari SET Moneda=$NouMoneder where usuari.Nom_Usuari='".$username."'";
					$result2 = mysqli_query($conn ,$sql2);
					echo $result2;

					//Crear Pedido
					$sql3 = "INSERT INTO `pedido`(`ID_Pedido`, `ID_Usuari`, `DataSortida`, `DataArribada`, `Estat`) VALUES ('".$numpedido."',(SELECT ID_Usuari from usuari u WHERE u.Nom_Usuari='".$uname."'),CURDATE(),null,1)";
					$result3 = mysqli_query($conn ,$sql3);
					echo $result3;

					

					//Insertar linies de pedido al pedido creat anteriorment
					$sql4 = "INSERT into liniapedido(ID_Pedido,ID_Producte,Talla,Quantitat)
							 SELECT '".$numpedido."',carrito.ID_Producte,carrito.Talla,carrito.Talla from carrito 
							 INNER join usuari on carrito.ID_Usuari=usuari.ID_Usuari where usuari.Nom_Usuari='".$uname."'";
					$result4 = mysqli_query($conn ,$sql4);
					echo $result4;


					//Borrar productes del carrito
					$sql5 = "DELETE l.* FROM carrito l inner join usuari u on l.ID_Usuari=u.ID_Usuari 
					WHERE (u.Nom_Usuari='".$uname."')";
					$result5 = mysqli_query($conn ,$sql5);
					echo $result5;*/

				}
		}
	 return($_Ret);
	}
?>

	
			