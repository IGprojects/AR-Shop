<?php
	
//ELIMINAR UN PRODUCTE DEL CARRITO
 
	function eliminarproductoCARRITO($pname,$uname,$talla)
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
                
		  $sql = "DELETE c.* FROM carrito c 
          INNER JOIN producte p ON c.ID_Producte = p.ID_Producte 
          inner join usuari u on c.ID_Usuari=u.ID_Usuari 
          WHERE (p.Nom_Producte = '".ltrim($pname)."' and c.Talla='".$talla."' and u.Nom_Usuari='".$uname."')";

            echo "Comanda:".$sql;

            
		  $result = mysqli_query($conn ,$sql);
    
		  if (mysqli_num_rows($result)>0) 
		   {
                echo "Comanda:".$sql;
              $_Ret = "producte borrat";
		    }
	        else
		    {
                $_Ret = "producte no borrat";
		    }
		 }
	 return($_Ret);
	}
?>
		
	
	