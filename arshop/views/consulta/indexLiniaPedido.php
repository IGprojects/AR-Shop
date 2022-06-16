 <!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo constant("URL") ?>public/fotos/logo.png">
    <title>Consulta Linies Pedidos</title>

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
                    <th>ID_Liniapedido </th>
                    <th>ID_Pedido</th>
                    <th>ID_Producte</th>
                    <th>Talla</th>
                    <th>Quantitat</th>
                </tr>
            </thead>
            <tbody id="tbody-liniaspedido">
                <?php 
                include_once 'models/liniapedido.php';
                foreach($this->liniaspedido as $row){
                    $liniapedido = new Liniapedido();
                    $liniapedido = $row;
                ?>
                <tr id="fila-<?php echo $liniapedido->ID_Liniapedido?>">
                    <td><?php echo $liniapedido->ID_Liniapedido; ?></td>
                    <td><?php echo $liniapedido->ID_Pedido; ?></td>
                    <td><?php echo $liniapedido->ID_Producte; ?></td>
                    <td><?php echo $liniapedido->Talla; ?></td>
                    <td><?php echo $liniapedido->Quantitat; ?></td>
                    <td><a href="<?php echo constant('URL'). 'consultaliniapedido/verliniapedido/' . $liniapedido->ID_Liniapedido;?>">Editar</a></td>
                    <td><button class="bEliminar" data-liniapedido="<?php echo $liniapedido->ID_Liniapedido?>">Eliminar</button></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
 
    <?php require 'views/footer.php'; ?>
    <script src="<?php echo  constant('URL');?>public/js/mainliniapedido.js"></script>
</body>
</html>