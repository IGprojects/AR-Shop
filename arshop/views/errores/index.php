 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
    <link rel="icon" href="<?php echo constant("URL") ?>public/fotos/logo.png">
</head>
<body>
<?php require 'views/header.php'; ?>
 
        <div id="main">
            <h1 class="center error"><?php echo $this->mensaje; ?></h1>
        </div> 
       
<?php require 'views/footer.php'; ?></body>
</html> 