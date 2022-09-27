<?php
	
	function verpedidosefect($nomusuari)
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
                
		  $sql = "SELECT P.ID_Pedido as NumPedido,sum(liniapedido.Quantitat*producte.Preu) as preutotal,despegable_seguiment.Descripcio as EstatDescripcio from pedido P
		  INNER join liniapedido on P.ID_Pedido=liniapedido.ID_Pedido
		  inner join producte on liniapedido.ID_Producte=producte.ID_Producte
		  inner join despegable_seguiment on P.Estat=despegable_seguiment.ID_Estat 
		  inner join usuari on P.ID_Usuari=usuari.ID_Usuari
		  where liniapedido.ID_Pedido=P.ID_Pedido and usuari.Nom_Usuari='".$nomusuari."' and P.Estat=4 GROUP by P.ID_Pedido";
		  //echo($sql);
		  $result = mysqli_query($conn ,$sql);
    
		  if (mysqli_num_rows($result)>0) 
		   {
              while($row=$result->fetch_assoc()){
                echo $row['NumPedido']."@".$row['preutotal']."@".$row['EstatDescripcio']."#";              
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
		
	
	