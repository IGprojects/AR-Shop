<?php
	
	function cambiarcontra($username,$passold,$passnew)
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
          
          $sql1 = "SELECT Contrasenya from usuari where Nom_Usuari='".$username."';";
                        
		  $sql2 = "UPDATE usuari SET Contrasenya='$passnew' WHERE Nom_Usuari='".$username."'";
            
          $result = mysqli_query($conn ,$sql1);

		  if (mysqli_num_rows($result)>0){
              
				while($row=$result->fetch_assoc()){
					$Contrasenya_Hasheada=password_hash('123',PASSWORD_DEFAULT);

					echo $Contrasenya_Hasheada;
					
					if(password_verify($passold,$row['Contrasenya'])){
						echo "Contrasenya correcta";
						echo $sql2;
						$result = mysqli_query($conn ,$sql2);
						echo "Contrasemnya Cambiada";
					}else{				
						echo "Contrasemnya incorrecta";
					}
				}
              
			}
	        else
		    {

				echo "adeu";
            
            }
		}
	 return($_Ret);
	}
?>
		
	