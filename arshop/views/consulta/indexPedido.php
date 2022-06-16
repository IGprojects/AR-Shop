 <!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo constant("URL") ?>public/fotos/logo.png">
    <title>Consulta Pedidos</title>

    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th {
            text-align:center;
        }
</style>
</head>
<body>
    
    <?php require 'views/header.php'; ?>

        <table class="table table-bordered table-sm table-striped">
            <thead>
                <tr>
                    <th>ID_Pedido </th>
                    <th>ID_Usuari</th>
                    <th>Data Sortida</th>
                    <th>Data Arribada</th>
                    <th>Estat</th>
                </tr>
            </thead>
            <tbody id="tbody-pedidos">
                <?php 
                include_once 'models/pedido.php';
                foreach($this->pedidos as $row){
                    $pedido = new Pedido();
                    $pedido = $row;
                ?>
                <tr id="fila-<?php echo $pedido->ID_Pedido?>">
                    <td><?php echo $pedido->ID_Pedido; ?></td>
                    <td><?php echo $pedido->ID_Usuari; ?></td>
                    <td><?php echo $pedido->DataSortida; ?></td>
                    <td><?php echo $pedido->DataArribada; ?></td>
                    <td><?php if($pedido->Estat==1){echo "Origen";}
                              else if($pedido->Estat==2){echo "En Aduanas";} 
                              else if($pedido->Estat==3){echo "En Destino";}
                              else if($pedido->Estat==4){echo "Recibido";}?></td>
                    <td><a href="<?php echo constant('URL'). 'consultapedido/verpedido/' . $pedido->ID_Pedido;?>">Editar</a></td>
                    <td><button class="bEliminar" data-pedido="<?php echo $pedido->ID_Pedido?>">Eliminar</button></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
 
    <?php require 'views/footer.php'; ?>
    <script src="<?php echo  constant('URL');?>public/js/mainPedido.js"></script>
</body>
</html>