<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo  constant('URL');?>/public/css/default.css"  TYPE="text/css">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <title>ARShop</title>
</head>
<body>
    
    <nav class="navbar navbar-expand-sm bg-dark">
        <div class="container-fluid">
           
            <a class="navbar-brand" href="<?php echo  constant('URL');?>main">
                <img src="<?php echo constant("URL") ?>public/fotos/logo.png"> 
            </a>


            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
            
            <ul  class="nav justify-content-end">
                
                <li class="nav-item">
                    <a class="nav-link" href="LogIn">Log In</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Registrer">Sign Out</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Registrer">Noticias</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Registrer">Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Registrer">Lista de Deseos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Registrer">Mis Pedidos</a>
                </li>
            </ul>

        </div>
        </div>
    </nav>
</body>
</html> 
