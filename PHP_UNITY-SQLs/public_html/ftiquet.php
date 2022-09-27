<?php
	
	function impriminttiquet($nomusuari,$numpedido)
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
                
		  $sql = "SELECT SUM(producte.Preu*Quantitat)-M2.Moneda as total FROM `carrito` 
          inner join usuari as M2 on carrito.ID_Usuari=M2.ID_Usuari 
          inner join producte on carrito.ID_Producte=producte.ID_Producte 
          where M2.Nom_Usuari='"$uname"'";


            
		  $result = mysqli_query($conn ,$sql);
    
		  if (mysqli_num_rows($result)>0) 
		   {
              while($row=$result->fetch_assoc()){
                  
                echo ($row['total']);              
              }
              
		    }
	        else
		    {
                $_Ret = "No es pot fer el tiquet";
		    }
		 }
	 return($_Ret);
	}
?>