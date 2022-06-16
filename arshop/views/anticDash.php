<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"/>
    <title>Log In</title>
    <link rel="icon" href="<?php echo constant("URL") ?>public/fotos/logo.png">
    <link rel="stylesheet" href="<?php echo constant('URL');?>/public/css/dashboard.css" TYPE="text/css">

</head>

<body style="background-color: dark">
    
    <?php require 'views/header.php'; ?>
 
    
        <div id= "main" class="d-flex justify-content-center form_container">

            <div class="principal"><h1>Dashboard</h1></div>

            <div class="port">
                <div class="card" style="width:400px">
                    <img class="card-img-top" src="<?php echo constant("URL") ?>public/fotos/heart.png" alt="Card image">
                <div class="card-body">
                <h4 class="card-title">Nike Dunk Purple</h4>
                <a href="#" class="btn btn-primary">Ver Producto</a>
                 </div>
                </div>    
            </div>
            <div class="port">
                <div class="card" style="width:400px">
                    <img class="card-img-top" src="<?php echo constant("URL") ?>public/fotos/heart.png" alt="Card image">
                <div class="card-body">
                <h4 class="card-title">Nike Dunk Purple</h4>
                <a href="#" class="btn btn-primary">Ver Producto</a>
                 </div>
                </div>
            </div>
            <div class="port">
                <div class="card" style="width:400px">
                    <img class="card-img-top" src="<?php echo constant("URL") ?>public/fotos/heart.png" alt="Card image">
                <div class="card-body">
                <h4 class="card-title">Nike Dunk Purple</h4>
                <a href="#" class="btn btn-primary">Ver Producto</a>
                 </div>
                </div>
            </div>
            <div class="port">
                <div class="card" style="width:400px">
                    <img class="card-img-top" src="<?php echo constant("URL") ?>public/fotos/heart.png" alt="Card image">
                <div class="card-body">
                <h4 class="card-title">Nike Dunk Purple</h4>
                <a href="#" class="btn btn-primary">Ver Producto</a>
                 </div>
                </div>
            </div>            
        </div>



    <?php require 'views/footer.php'; ?>
 
</body>
</html>