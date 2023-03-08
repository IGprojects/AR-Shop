<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <title>ARShop</title>
    <link rel="stylesheet" href="<?php echo  constant('URL');?>/public/css/default.css"  TYPE="text/css">
</head>
<style>
    .nav-link{
        color: rgb(255, 255, 255);

    }

</style>
<body>
    
    <nav style="color: rgb(255, 255, 255);" class="navbar navbar-expand-sm navbar-dark bg-dark ">
        <div class="container-fluid">
           
            <a class="navbar-brand" href="">
                <img src="<?php echo constant("URL") ?>public/fotos/logo.png"> 
            </a>


            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="nav nav-pills">
                    <li class="nav-item">
                    <a class="nav-link" href="<?php echo  constant('URL');?>main">Inicio</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo  constant('URL');?>Dashboard">Panel de Control</a>
                    </li>
                
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="<?php echo  constant('URL');?>consulta">Administracio</a>
                        <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?php echo  constant('URL');?>consultaUsuari">Consulta Usuaris</a></li>
                        <li><a class="dropdown-item" href="<?php echo  constant('URL');?>consultaProducte">Consulta Productes</a></li>
                        <li><a class="dropdown-item" href="<?php echo  constant('URL');?>consultaPedido">Consulta Pedidos</a></li>
                        <li><a class="dropdown-item" href="#"><?php
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
                
                            $sql = "select COUNT(pedido.ID_Pedido) as pedidospendientes from pedido where pedido.DataArribada is null;";
                            $result = mysqli_query($bd_connection ,$sql);

                            if (mysqli_num_rows($result)>0) {
                            //show data for each row
                            while($row = mysqli_fetch_assoc($result)){
                                
                                            echo "Pedidos Pendientes(".$row['pedidospendientes'].")";
                            }
                            }
                        ?></a></li>
                        <li><a class="dropdown-item" href="<?php echo  constant('URL');?>consultaLiniaPedido">Consulta Linies Pedido</a></li>
                        <li><a class="dropdown-item" href="<?php echo  constant('URL');?>consultNoticia">Consulta Noticias</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="<?php echo  constant('URL');?>consulta">Creacio</a>
                        <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?php echo  constant('URL');?>nuevoUsuari">Creacio Usuaris</a></li>
                        <li><a class="dropdown-item" href="<?php echo  constant('URL');?>nuevo">Creacio Productes</a></li>
                        <li><a class="dropdown-item" href="<?php echo  constant('URL');?>nuevoPedido">Creacio Pedidos</a></li>
                        <li><a class="dropdown-item" href="<?php echo  constant('URL');?>nuevoLiniaPedido">Creacio Linies Pedido</a></li>
                        <li><a class="dropdown-item" href="<?php echo  constant('URL');?>nuevoNoticia">Creacio Noticia</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo  constant('URL');?>Noticies">Noticíes</a>
                    </li>
                
            </ul>
            
            

        </div>
        </div>
    </nav>
</body>
</html> 