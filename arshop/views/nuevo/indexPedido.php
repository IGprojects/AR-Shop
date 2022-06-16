<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"/>
    <link rel="icon" href="<?php echo constant("URL") ?>public/fotos/logo.png">
    <title>Crear Pedido</title>
</head>
    <style>
        .estru
        {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            width: 100%;
        }
    </style>
<body style="background-color: dark">
    
    <?php require 'views/header.php'; ?>
    <br>

        <h1 class="center">Nou Pedido</h1>
    
        <div id= "main" class="d-flex justify-content-center form_container">

            <div class="center"><?php echo $this->mensaje;?></div>

            <form action="<?php echo  constant('URL');?>/nuevo/registro_pedido" method="post" enctype="multipart/form-data">
                
            
            <label for="ID_Usuari" class="estru">Usuari:
                    <select name="ID_Usuari" class="custom-select">
                        <?php
                            $host = constant('HOST');
                            $usuari = constant('USER');
                            $password = constant('PASSWORD');
                            $bd_name = constant('DB');
                            $table_name_bs = "usuari";


                            $bd_connection = mysqli_connect($host,$usuari,$password,$bd_name);

                            if(!$bd_connection)
                            {
                                die ('No se ha pogut connectar a la base de dades');
                            }
                
                            $sql = "SELECT ID_Usuari,Nom_Usuari FROM usuari";
                            $result = mysqli_query($bd_connection ,$sql);

                            if (mysqli_num_rows($result)>0) {
                            //show data for each row
                            while($row = mysqli_fetch_assoc($result)){
                                
                                            echo "<option value =".$row['ID_Usuari']."> ".$row['Nom_Usuari']."</option>";
                            }
                            }
                        ?>
                    </select>  </label>
                    <br> 




            <label for="Estat" class="estru">Estat:
                    <select name="Estat" class="custom-select">
                        <?php
                            $host = constant('HOST');
                            $usuari = constant('USER');
                            $password = constant('PASSWORD');
                            $bd_name = constant('DB');
                            $table_name_bs = "despegable_seguiment";


                            $bd_connection = mysqli_connect($host,$usuari,$password,$bd_name);

                            if(!$bd_connection)
                            {
                                die ('No se ha pogut connectar a la base de dades');
                            }
                
                            $sql = "SELECT ID_Estat,Descripcio FROM despegable_seguiment";
                            $result = mysqli_query($bd_connection ,$sql);

                            if (mysqli_num_rows($result)>0) {
                            //show data for each row
                            while($row = mysqli_fetch_assoc($result)){
                                
                                            echo "<option value =".$row['ID_Estat']."> ".$row['Descripcio']."</option>";
                            }
                            }
                        ?>
                    </select>  </label>
                    <br>        
               
                    <label for="DataSortida" class="estru">Data de Sortida
                    <input type="date" class="form-control" placeholder="Entra la data de sortida" name="DataSortida" ></label>

                    <label for="DataArribada" class="estru">Data d'Arribada
                    <input type="date" class="form-control" placeholder="Entra la data d'arribada" name="DataArribada" ></label>
                        
                <br></br>
                  
                <div class="estru"><input  type="submit" class="btn btn-primary" value="Crear Nou Pedido"></div>
            </form>
        </div>



    <?php require 'views/footer.php'; ?>
 
</body>
</html>