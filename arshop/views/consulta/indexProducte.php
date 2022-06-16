 <!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo constant("URL") ?>public/fotos/logo.png">
    <title>Consulta Productes</title>

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
                    <th>ID_Producte </th>
                    <th>Nom_Producte</th>
                    <th>Preu</th>
                    <th>Imatge</th>
                    <th>Tipus</th>
                </tr>
            </thead>
            <tbody id="tbody-productes">
                <?php 
                include_once 'models/producte.php';
                foreach($this->productes as $row){
                    $producte = new Producte();
                    $producte = $row;
                ?>
                <tr id="fila-<?php echo $producte->ID_Producte?>">
                    <td><?php echo $producte->ID_Producte; ?></td>
                    <td><?php echo $producte->Nom_Producte; ?></td>
                    <td><?php echo $producte->Preu; ?></td>
                    <td><img src="<?php echo $producte->URL;?>"></td>
                    <td><?php 
                            if($producte->Tipus==1){echo "Clothes";}
                            else if($producte->Tipus==2){echo "Shoes";} 
                            else if($producte->Tipus==3){echo "Accesories";}
                            else if($producte->Tipus==4){echo "Other";}
                    ?></td>
                    <td><a href="<?php echo constant('URL'). 'consultaproducte/verproducte/' . $producte->ID_Producte;?>">Editar</a></td>
                    <td><button class="bEliminar" data-producte="<?php echo $producte->ID_Producte?>">Eliminar</button></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
 
    <?php require 'views/footer.php'; ?>
    <script src="<?php echo  constant('URL');?>public/js/mainProducte.js"></script>
</body>
</html>