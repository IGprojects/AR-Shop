<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo constant('URL');?>/public/css/dashboard.css" TYPE="text/css">
    <link rel="icon" href="<?php echo constant("URL") ?>public/fotos/logo.png">


</head>
<body>
<?php require 'views/header_user.php'; ?>

    <section class="hero-section">
    <div class="card-grid">
        
        <a class="card" href="#">
            <div class="card__background" style="background-image: url(<?php echo constant("URL") ?>public/fotos/clothes.jpg)"></div>
            <div class="card__content">
                <p class="card__category">Clothes</p>
                <h3 class="card__heading"></h3>
            </div>
        </a>

        <a class="card" href="#">
            <div class="card__background" style="background-image: url(<?php echo constant("URL") ?>public/fotos/nike.png)"></div>
            <div class="card__content">
                <p class="card__category">Shoes</p>
            </div>
        </a>

        <a class="card" href="#">
            <div class="card__background" style="background-image: url(<?php echo constant("URL") ?>public/fotos/accesories.png)"></div>
            <div class="card__content">
                <p class="card__category">Accesories</p>
            </div>
        </a>

        <a class="card" href="#">
            <div class="card__background" style="background-image: url(<?php echo constant("URL") ?>public/fotos/furniture.png)"></div>
            <div class="card__content">
                <p class="card__category">Other</p>
            <!--  <h3 class="card__heading">Example Card Heading</h3>-->
            </div>
        </a>
    <div>
    </section>
    <?php require 'views/footer.php'; ?>

</body>
</html>