<?php
	

	function registrerbd($nomusuari,$nom_apellidos,$gmail,$contrasenya,$Tel,$adreca,$provincia,$pais,$ciutat,$cp)
	{
		echo ("FEnt la funcio");
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
		  $sql = "SELECT Gmail FROM usuari WHERE Gmail = '".$gmail."'";
		  $result = mysqli_query($conn ,$sql);
    
		  if (mysqli_num_rows($result)>0) 
		   {
              $_Ret = 3;
			  echo $_Ret;
		    }
	        else
		    {
				$Contrasenya_Hasheada=password_hash($contrasenya,PASSWORD_DEFAULT);
                
                $sql2="INSERT INTO `usuari`(`Nom_Usuari`, `Nombre_Apellidos`, `Gmail`, `Contrasenya`, `Tel`, `Adressa`, `Provincia`, `Pais`, `Ciutat`, `CP`) 
				VALUES ('".$nomusuari."','".$nom_apellidos."','".$gmail."','".$Contrasenya_Hasheada."','".$Tel."','".$adreca."','".$provincia."','".$pais."','".$ciutat."','".$cp."')";
                
                
                $resultInser = mysqli_query($conn ,$sql2);
                echo $sql2;
                $_Ret = 0;
		    }
		 }
	 return($_Ret);
	}
?>
		
	
	