<?php
	
	function loginbd($username, $password)
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
		  $sql = "SELECT Contrasenya FROM usuari WHERE Nom_Usuari = '".$username."'";
		  $result = mysqli_query($conn ,$sql);
    
		  if (mysqli_num_rows($result)>0) 
		   {
			  //show data for each row
			  while($row = mysqli_fetch_assoc($result))
			  {
					//Aqui es fa password Verify
					if (password_verify($password,$row['Contrasenya'])) 
						{
						
						$_Ret = 9;
						}else{$_Ret = 10;}
			   }
		    }
	        else
		    {
		     $_Ret = 3;
		    }
		 }
	 return($_Ret);
	}
?>
		
	
	