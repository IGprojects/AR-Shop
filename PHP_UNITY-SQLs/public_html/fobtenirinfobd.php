<?php
	

	function obtenirinfobd($username)
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
		  $sql = "SELECT * FROM usuari WHERE Nom_Usuari = '".$username."'";
		  $result = mysqli_query($conn ,$sql);
            echo($sql);
		  if (mysqli_num_rows($result)>0) 
		   {
			  //show data for each row
			  while($row = mysqli_fetch_assoc($result))
			  {
               // $_Ret=$row['Nombre_Apellidos'].$row['Gmail'].$row['Tel'].$row['Adressa'].$row['Moneda'];
		          $_Ret="hola";
              }
	       $_Ret="hola";

		  }
        $_Ret="hola";
        echo($_Ret);
            
	 return($_Ret);
	}
?>
		
	
	