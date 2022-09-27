<?php
	
	function cambiaradressa($username,$AdresaNova)
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
          
                        
		  $sql = "UPDATE usuari SET Adressa='$AdresaNova' WHERE Nom_Usuari='".$username."'";
            
          $result = mysqli_query($conn ,$sql);

		  echo "Consulta feta";

		}
	 return($_Ret);
	}
?>
		
	