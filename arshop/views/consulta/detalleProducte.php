 <!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"/>
    <title>Actualitzar Producte</title>
    <link rel="icon" href="<?php echo constant("URL") ?>public/fotos/logo.png">
</head>
<style>
    .estru{
        align-items:"center";
    }
</style>
<body>
    
    <?php require 'views/header.php'; ?>

    <div id= "main">
        <h1 class="center">Detalle de <?php echo $this->producte->ID_Producte;?></h1>
        
        <div class="center"><?php echo $this->mensaje;?></div>

        <form action="<?php echo  constant('URL');?>/consultaproducte/actualizarproducte" method="post">
 
                    <label for="Nom_Producte" class="estru">Nom del Producte
                    <input type="text" class="form-control" placeholder="Entra el nom del producte" value="<?php echo $this->producte->Nom_Producte;?>" name="Nom_Producte" ></label>

                    <br>

                    <label for="Preu" class="estru">Preu</label>
                    <input type="number" class="form-control" placeholder="Entra el preu del producte" value="<?php echo $this->producte->Preu;?>" name="Preu"  required></label>   
                    <br>

                    <label  for="URL">Selecciona Foto</label>
                    <input type="file" class="estru" id="URL" value="<?php echo $this->producte->URL;?>" name="URL">

                    <label for="Tipus" class="estru">Tipus:
                    <select name="Tipus" class="custom-select" value="<?php echo $this->producte->Tipus;?>">
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
                <input type="submit" value="Actualizar producte">
            </p>
        </form>
    </div>
 
    <?php require 'views/footer.php'; ?>
 
</body>
</html>