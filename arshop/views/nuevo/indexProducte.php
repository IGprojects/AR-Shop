<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"/>
    <link rel="icon" href="<?php echo constant("URL") ?>public/fotos/logo.png">
    <title>Crear Producte</title>
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
        <h1 class="center">Nou Producte</h1>
    
        <div id= "main" class="d-flex justify-content-center form_container">

            <div class="center"><?php echo $this->mensaje;?></div>

            <form action="<?php echo  constant('URL');?>/nuevo/registro_producte" method="post" enctype="multipart/form-data">
                    
                    
                    <label for="Nom_Producte" class="estru">Nom del Producte
                    <input type="text" class="form-control" placeholder="Entra el nom del producte" name="Nom_Producte" ></label>


                    <label for="Preu" class="estru">Preu</label>
                    <input type="number" class="form-control" placeholder="Entra el preu del producte" name="Preu"  required></label>   
                    
                    <br>

                    <label  for="URL">Selecciona Foto</label>
                    <input type="file" class="estru" id="URL" name="URL">

                    <br>

                    <label for="Tipus" class="estru">Tipus:
                    <select name="Tipus" class="custom-select">
                        <?php
                            $host = constant('HOST');
                            $usuari = constant('USER');
                            $password = constant('PASSWORD');
                            $bd_name = constant('DB');
                            $table_name_bs = "desplegable_tipus";


                            $bd_connection = mysqli_connect($host,$usuari,$password,$bd_name);

                            if(!$bd_connection)
                            {
                                die ('No se ha pogut connectar a la base de dades');
                            }
                
                            $sql = "SELECT idTipus,Descripcio FROM desplegable_tipus";
                            $result = mysqli_query($bd_connection ,$sql);

                            if (mysqli_num_rows($result)>0) {
                            //show data for each row
                            while($row = mysqli_fetch_assoc($result)){
                                
                                            echo "<option value =".$row['idTipus']."> ".$row['Descripcio']."</option>";
                            }
                            }
                        ?>
                    </select>  </label>
                    <br>        


                <br></br>
                  
                <div class="estru"><input  type="submit" class="btn btn-primary" value="Crear Nou Producte"></div>
            </form>
        </div>



    <?php require 'views/footer.php'; ?>
 
</body>
</html>