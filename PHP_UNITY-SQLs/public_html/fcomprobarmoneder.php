<?php
	
	function comprobaciomonederinfo($username)
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
            
            
		  $sql = "SELECT SUM(producte.Preu*Quantitat) as preu,usuari.Moneda as moneder,usuari.Gmail as GM FROM `carrito` inner join usuari on carrito.ID_Usuari=usuari.ID_Usuari inner join producte on carrito.ID_Producte=producte.ID_Producte where usuari.Nom_Usuari='".$username."'";
            
            
            
		  $result = mysqli_query($conn ,$sql);
    
		  if (mysqli_num_rows($result)>0) 
		   {
              while($row=$result->fetch_assoc()){
                               
                 echo $row['preu']."&".$row['moneder']."&".$row['GM'];                    
              
              }
          
          }else{echo "error";}
	       
		 }
	 return($_Ret);
	}
?>