<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"/>
    <link rel="icon" href="<?php echo constant("URL") ?>public/fotos/logo.png">
    <!--<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">-->
    <title>Crear Noticia</title>
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
        <h1 class="center">Nova Noticia</h1>
    
        <div id= "main" class="d-flex justify-content-center form_container">

            <div class="center"><?php echo $this->mensaje;?></div>

            <form action="<?php echo  constant('URL');?>/nuevoNoticia/registro_noticia" method="post" enctype="multipart/form-data">
                    
                    
                    <label for="Titol" class="estru">Titol de la Noticia
                    <input type="text" class="form-control" placeholder="Entra el Titol de la Noticia" name="Titol" ></label>

                    <br>

                    <label for="Descripcio" class="estru">Cos de la Noticia</label>
                    <textarea name="Descripcio" rows="5" cols="50"></textarea>
                    <!--<input class="w3-input w3-animate-input" type="text" style="width:50%; height:40%;" name="Descripcio"  required></label>  --> 
                    <br>

                    <br>
                    <label for="Estructura" class="estru">Estructura:
                    <select name="Estructura" class="custom-select">
                        <?php
                            $host = constant('HOST');
                            $usuari = constant('USER');
                            $password = constant('PASSWORD');
                            $bd_name = constant('DB');
                            $table_name_bs = "desplegable_estructura";


                            $bd_connection = mysqli_connect($host,$usuari,$password,$bd_name);

                            if(!$bd_connection)
                            {
                                die ('No se ha pogut connectar a la base de dades');
                            }
                
                            $sql = "SELECT ID_Estructura,Descripcio FROM desplegable_estructura";
                            $result = mysqli_query($bd_connection ,$sql);

                            if (mysqli_num_rows($result)>0) {
                            //show data for each row
                            while($row = mysqli_fetch_assoc($result)){
                                
                                            echo "<option value =".$row['ID_Estructura']."> ".$row['Descripcio']."</option>";
                            }
                            }
                        ?>
                    </select>  </label>
                    <br>        

                    <label  for="Imatge">Selecciona Foto</label>
                    <input type="file" class="estru" id="Imatge" name="Imatge">

                    <br>

                <br></br>
                  
                <div class="estru"><input  type="submit" class="btn btn-primary" value="Crear Nova Noticia"></div>
            </form>
        </div>



    <?php require 'views/footer.php'; ?>
 
</body>
</html>