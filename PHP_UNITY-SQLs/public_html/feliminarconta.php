<?php
	
	function eliminarconta($username)
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
          
          $sql1 = "delete from usuari where Nom_Usuari='".$username."';";
                                    
          $result = mysqli_query($conn ,$sql1);
		  
		  echo "Conta Eliminada";

		 
		}
	 return($_Ret);
	}
?>
		
	