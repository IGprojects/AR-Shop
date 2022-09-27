<?php
	

	function generarpedidofinal($username,$moneder,$preutotal)
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
          //$sql="UPDATE p SET producte.Stock = 3 from producte p inner join carrito c on p.ID_Producte=c.ID_Producte inner join usuari on c.ID_Usuari=usuari.ID_Usuari WHERE usuari.Nom_Usuari = 'Ignasi8310'";
            
            
		  $sql2 = "DELETE c.* FROM carrito c inner join usuari u on c.ID_Usuari=u.ID_Usuari WHERE (u.Nom_Usuari='".$username."')";
		  $sql3 = "Select * from carrito";
		  $sql3 = "Select * from carrito";

            
            
		  $result = mysqli_query($conn ,$sql2);
    
		  if (mysqli_num_rows($result)>0) 
		   {
             // echo "estic dins de les consultes";

              while($row=$result->fetch_assoc()){
                  

              }
          
          
          
          }else{echo "error";}
	       
		 }
	 return($_Ret);
	}
?>