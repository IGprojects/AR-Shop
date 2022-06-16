<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"/>
    <link rel="icon" href="<?php echo constant("URL") ?>public/fotos/logo.png">
    <title>Registrer</title>
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
    
    <?php require 'views/header_Inici2.php'; ?>
        <br>
        <h1 style="text-align: center;">Registrer</h1>
        <br>
        <div id= "main" class="d-flex justify-content-center form_container">

            <form action="<?php echo  constant('URL');?>/Registrer/Registrar" method="post" enctype="multipart/form-data">
                    
            <label for="Nom_Usuari" class="estru">Nom d'Usuari
                    <input type="text" class="form-control" placeholder="Entra el nom de l'usuari" name="Nom_Usuari" ></label>

                    <label for="Nombre_Apellidos" class="estru">Nombre y Apellidos</label>
                    <input type="text" class="form-control" placeholder="Entra el Nom i Cognoms" name="Nombre_Apellidos"  required></label>   
                    
                    <label for="Gmail" class="estru">Gmail
                    <input type="text" class="form-control" placeholder="Entra el Gmail" name="Gmail" required></label>

                    <label for="Contrasenya" class="estru">Contrasenya
                    <input type="text" class="form-control" placeholder="Entra la Contrasenya" name="Contrasenya" ></label>

                    <label for="Tel" class="estru">Tel.</label>
                    <input type="number" class="form-control" placeholder="Entra el Telefon" name="Tel"  required></label>   
                    
                    <label for="Adressa" class="estru">Adressa
                    <input type="text" class="form-control" placeholder="Entra l'Adressa" name="Adressa" required></label>

                    <label for="Provincia" class="estru">Provincia
                    <input type="text" class="form-control" placeholder="Entra la Provincia" name="Provincia" ></label>

                    <label for="Pais" class="estru">Pais</label>
                    <input type="text" class="form-control" placeholder="Entra el Pais" name="Pais"  required></label>   
                    
                    <label for="Ciutat" class="estru">Ciutat
                    <input type="text" class="form-control" placeholder="Entra la Ciutat" name="Ciutat" required></label>

                    <label for="CP" class="estru">CP</label>
                    <input type="number" class="form-control" placeholder="Entra el Codi Postal" name="CP"  required></label>   
                   
                    
                    <br></br>
                <div class="estru" style="align-items: center;"><input  type="submit" class="btn btn-primary" value="Registrar-se"></div>
            </form>
        </div>

    <br>

    <?php require 'views/footer.php'; ?>
 
</body>
</html>