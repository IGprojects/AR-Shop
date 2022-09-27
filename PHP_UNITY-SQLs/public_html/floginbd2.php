<?php
	

	function loginbd2($username)
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
    
		  if (mysqli_num_rows($result)>0) 
		   {

              while($row=$result->fetch_assoc()){
                echo $row['Nombre_Apellidos']."/".$row['Gmail']."/".$row['Tel']."/".$row['Adressa']."/";              
              }
          
          
          
          }else{echo "error";}
	       
		 }
	 return($_Ret);
	}
?>
		