<?php
	
	function carregarproductes($tipusproducte)
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
                
		  $sql = "SELECT ID_Producte,Preu,URL FROM `producte` WHERE Tipus=".$tipusproducte.";";
            
		  $result = mysqli_query($conn ,$sql);
    
		  if (mysqli_num_rows($result)>0) 
		   {
              while($row=$result->fetch_assoc()){

                echo($row['ID_Producte']."@".$row['Preu']."@".$row['URL']."#");              
              }
              
		    }
	        else
		    {
                $_Ret = "Error al carregar els productes";
		    }
		 }
	 return($_Ret);
	}
?>
		
	
	