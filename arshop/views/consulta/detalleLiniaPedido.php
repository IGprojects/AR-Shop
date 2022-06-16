 <!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"/>
    <title>Actualitzar Linia Pedido</title>
    <link rel="icon" href="<?php echo constant("URL") ?>public/fotos/logo.png">

</head>

<body>
    
    <?php require 'views/header.php'; ?>
 
    <div id= "main">
        <h1 class="center">Detalle de <?php echo $this->liniapedido->ID_Liniapedido;?></h1>
        
        <div class="center"><?php echo $this->mensaje;?></div>

        <form action="<?php echo  constant('URL');?>/consultaliniapedido/actualizarliniapedido" method="post">

        <label for="ID_Pedido" class="estru">Pedido:
                    <select name="ID_Pedido" class="custom-select">
                        <?php
                            $host = constant('HOST');
                            $usuari = constant('USER');
                            $password = constant('PASSWORD');
                            $bd_name = constant('DB');
                            $table_name_bs = "pedido";


                            $bd_connection = mysqli_connect($host,$usuari,$password,$bd_name);

                            if(!$bd_connection)
                            {
                                die ('No se ha pogut connectar a la base de dades');
                            }
                
                            $sql = "SELECT ID_Pedido,ID_Usuari FROM pedido";
                            $result = mysqli_query($bd_connection ,$sql);

                            if (mysqli_num_rows($result)>0) {
                            //show data for each row
                            while($row = mysqli_fetch_assoc($result)){
                                
                                            echo "<option value =".$row['ID_Pedido']."> ".$row['ID_Usuari']."</option>";
                            }
                            }
                        ?>
                    </select>  </label>
                    <br> 




            <label for="ID_Producte" class="estru">Producte:
                    <select name="ID_Producte" class="custom-select">
                        <?php
                            $host = constant('HOST');
                            $usuari = constant('USER');
                            $password = constant('PASSWORD');
                            $bd_name = constant('DB');
                            $table_name_bs = "producte";


                            $bd_connection = mysqli_connect($host,$usuari,$password,$bd_name);

                            if(!$bd_connection)
                            {
                                die ('No se ha pogut connectar a la base de dades');
                            }
                
                            $sql = "SELECT ID_Producte,Nom_Producte FROM producte";
                            $result = mysqli_query($bd_connection ,$sql);

                            if (mysqli_num_rows($result)>0) {
                            //show data for each row
                            while($row = mysqli_fetch_assoc($result)){
                                
                                            echo "<option value =".$row['ID_Producte']."> ".$row['Nom_Producte']."</option>";
                            }
                            }
                        ?>
                    </select>  </label>
                    <br>        
               

                    <label for="Talla" class="estru">Talla:
                    <select name="Talla" class="custom-select">
                        <?php
                            $host = constant('HOST');
                            $usuari = constant('USER');
                            $password = constant('PASSWORD');
                            $bd_name = constant('DB');
                            $table_name_bs = "desplegable_talla";


                            $bd_connection = mysqli_connect($host,$usuari,$password,$bd_name);

                            if(!$bd_connection)
                            {
                                die ('No se ha pogut connectar a la base de dades');
                            }
                
                            $sql = "SELECT ID,Descripcio FROM desplegable_talla";
                            $result = mysqli_query($bd_connection ,$sql);

                            if (mysqli_num_rows($result)>0) {
                            //show data for each row
                            while($row = mysqli_fetch_assoc($result)){
                                
                                            echo "<option value =".$row['ID']."> ".$row['Descripcio']."</option>";
                            }
                            }
                        ?>
                    </select>  </label>

                    <br>



                    <label for="Quantitat" class="estru">Quantitat
                    <input type="number" class="form-control" placeholder="Entra la Quantitat" name="Quantitat"  value="<?php echo $this->liniapedido->Quantitat;?>" required></label>
                    
                    <br>


                <input type="submit" value="Actualizar Linia Pedido">
            </p>
        </form>
    </div>
 
    <?php require 'views/footer.php'; ?>
 
</body>
</html>