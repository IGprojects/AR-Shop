 <!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"/>
    <title>Actualitzar Usuari</title>
    <link rel="icon" href="<?php echo constant("URL") ?>public/fotos/logo.png">

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
<body>
    
    <?php require 'views/header.php'; ?>
 
    <div id= "main">
        <h1 class="center">Detalle de <?php echo $this->usuari->ID_Usuari;?></h1>
        
        <div class="center"><?php echo $this->mensaje;?></div>

        <form action="<?php echo  constant('URL');?>/consultausuari/actualizarusuari" method="post">
                
                    <label for="Nom_Usuari" class="estru">Nom d'Usuari
                    <input type="text" class="form-control" placeholder="Entra el nom de l'usuari"  value="<?php echo $this->usuari->Nom_Usuari;?>" name="Nom_Usuari" ></label>
                    <br>
                    <label for="Nombre_Apellidos" class="estru">Nombre y Apellidos</label>
                    <input type="text" class="form-control" placeholder="Entra el Nom i Cognoms" value="<?php echo $this->usuari->Nombre_Apellidos;?>" name="Nombre_Apellidos"  required></label>   
                    <br>

                    <label for="Gmail" class="estru">Gmail
                    <input type="text" class="form-control" placeholder="Entra el Gmail" value="<?php echo $this->usuari->Gmail;?>" name="Gmail" required></label>
                    <br>

                    <label for="Contrasenya" class="estru">Contrasenya
                    <input type="text" class="form-control" placeholder="Entra la Contrasenya" value="<?php echo $this->usuari->Contrasenya;?>" name="Contrasenya" ></label>
                    <br>

                    <label for="Tel" class="estru">Tel.</label>
                    <input type="number" class="form-control" placeholder="Entra el Telefon" value="<?php echo $this->usuari->Tel;?>" name="Tel"  required></label>   
                    <br>

                    <label for="Adressa" class="estru">Adressa
                    <input type="text" class="form-control" placeholder="Entra l'Adressa" value="<?php echo $this->usuari->Adressa;?>" name="Adressa" required></label>
                    <br>

                    <label for="Provincia" class="estru">Provincia
                    <input type="text" class="form-control" placeholder="Entra la Provincia" value="<?php echo $this->usuari->Provincia;?>" name="Provincia" ></label>
                    <br>

                    <label for="Pais" class="estru">Pais</label>
                    <input type="text" class="form-control" placeholder="Entra el Pais" value="<?php echo $this->usuari->Pais;?>" name="Pais"  required></label>   
                    <br>

                    <label for="Ciutat" class="estru">Ciutat
                    <input type="text" class="form-control" placeholder="Entra la Ciutat" value="<?php echo $this->usuari->Ciutat;?>" name="Ciutat" required></label>
                    <br>

                    <label for="CP" class="estru">CP</label>
                    <input type="number" class="form-control" placeholder="Entra el Codi Postal" value="<?php echo $this->usuari->CP;?>" name="CP"  required></label>   
                    <br>

                    <label for="Moneda" class="estru">Moneda</label>
                    <input type="number" class="form-control" placeholder="Entra les Moneda" value="<?php echo $this->usuari->Moneda;?>" name="Moneda"  required></label>   
                        
                <br></br>
                  
                <div class="estru" style=" align-items:center;"><input  type="submit" class="btn btn-primary" value="Actualitzar Usuari"></div>
        </form>
    </div>
 
    <?php require 'views/footer.php'; ?>
 
</body>
</html>