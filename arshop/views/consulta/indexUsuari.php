 <!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo constant("URL") ?>public/fotos/logo.png">
    <title>Consulta Usuaris</title>

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
                    <th>ID_Usuari </th>
                    <th>Nom_Usuari</th>
                    <th>Nombre_Apellidos</th>
                    <th>Gmail</th>
                    <th>Contrasenya </th>
                    <th>Tel</th>
                    <th>Adressa</th>
                    <th>Provincia</th>
                    <th>Pais </th>
                    <th>Ciutat</th>
                    <th>CP</th>
                    <th>Moneda</th>
                </tr>
            </thead>
            <tbody id="tbody-usuaris">
                <?php 
                include_once 'models/usuari.php';
                foreach($this->usuaris as $row){
                    $usuari = new Usuari();
                    $usuari = $row;
                ?>
                <tr id="fila-<?php echo $usuari->ID_Usuari?>">
                    <td><?php echo $usuari->ID_Usuari; ?></td>
                    <td><?php echo $usuari->Nom_Usuari; ?></td>
                    <td><?php echo $usuari->Nombre_Apellidos; ?></td>
                    <td><?php echo $usuari->Gmail; ?></td>
                    <td><?php echo $usuari->Contrasenya; ?></td>
                    <td><?php echo $usuari->Tel; ?></td>
                    <td><?php echo $usuari->Adressa; ?></td>
                    <td><?php echo $usuari->Provincia; ?></td>
                    <td><?php echo $usuari->Pais; ?></td>
                    <td><?php echo $usuari->Ciutat; ?></td>
                    <td><?php echo $usuari->CP; ?></td>
                    <td><?php echo $usuari->Moneda; ?></td>

                    <td><a href="<?php echo constant('URL'). 'consultausuari/verusuari/' . $usuari->ID_Usuari;?>">Editar</a></td>
                    <td><button class="bEliminar" data-usuari="<?php echo $usuari->ID_Usuari?>">Eliminar</button></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
 
    <?php require 'views/footer.php'; ?>
    <script src="<?php echo  constant('URL');?>public/js/mainUsuari.js"></script>
</body>
</html>