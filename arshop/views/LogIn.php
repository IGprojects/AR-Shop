<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"/>
          <link rel="icon" href="<?php echo constant("URL") ?>public/fotos/logo.png">

    <title>Log In</title>
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

        <h1 style="text-align: center;">Log In</h1>

        <br>
    
        <div id= "main" class="d-flex justify-content-center form_container">

            <form action="<?php echo  constant('URL');?>/login/inicisessio" method="post" enctype="multipart/form-data">
                    
                    
                    <label for="Gmail" class="estru">Gmail
                    <input type="text" class="form-control" placeholder="Entra el teu Gmail" name="Gmail" ></label>

                    <label for="Contrasenya" class="estru">Contrasenya</label>
                    <input type="password" class="form-control" placeholder="Entra la teva Contrasenya" name="Contrasenya"  required></label>   
                    
                    <br>
                    <div class="estru" style="align-items: center;"><input  type="submit" class="btn btn-primary" value="Entrar"></div>
            </form>
        </div>

        <br>    

    <?php require 'views/footer.php'; ?>
 
</body>
</html>