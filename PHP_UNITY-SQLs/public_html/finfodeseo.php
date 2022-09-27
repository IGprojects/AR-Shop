<?php
	

	function listadeseosinfo($username)
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
            
                        //  echo "estic dins abans de fer la consulta";
            
		  $sql = "SELECT producte.Nom_Producte,producte.Preu,producte.URL FROM `usuari` 
          inner join listadeseos on usuari.ID_Usuari=listadeseos.ID_Usuari 
          inner join producte on listadeseos.ID_Producte=producte.ID_Producte 
          where usuari.Nom_Usuari='".$username."'";
            
            
            
		  $result = mysqli_query($conn ,$sql);
    
		  if (mysqli_num_rows($result)>0) 
		   {
             // echo "estic dins de les consultes";

              while($row=$result->fetch_assoc()){
                  
                echo $row['Nom_Producte']."@".$row['Preu']."@".$row['URL']."#";              
              }
          
          
          
          }else{echo "error";}
	       
		 }
	 return($_Ret);
	}
?>
		