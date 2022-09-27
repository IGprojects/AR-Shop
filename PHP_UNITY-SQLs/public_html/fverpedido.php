<?php

	function verpedidoID($numpedido)
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
                
		  $sql = "select producte.Nom_Producte,producte.Preu,liniapedido.Quantitat,liniapedido.Talla from pedido inner join liniapedido on pedido.ID_Pedido=liniapedido.ID_Pedido INNER join producte on liniapedido.ID_Producte=producte.ID_Producte where pedido.ID_Pedido='".$numpedido"'";

            echo "Comanda:".$sql;

            
		  $result = mysqli_query($conn ,$sql);
    
		  if (mysqli_num_rows($result)>0) 
		   {
              while($row=$result->fetch_assoc()){
                  
                echo $row['Nom_Producte']."@".$row['Preu']."@".$row['Quantitat']."@".$row['Talla']."#";              
              }
              
		    }
	        else
		    {
                $_Ret = "No existeix aquest pedido";
		    }
		 }
	 return($_Ret);
	}
?>
		
	
	