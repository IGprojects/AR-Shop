 <!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ARShop</title>
    <link rel="stylesheet" href="<?php echo constant('URL');?>/public/css/main.css" TYPE="text/css">
    <link rel="icon" href="<?php echo constant("URL") ?>public/fotos/logo.png">

</head>

<body class="body_main">
<?php require 'views/header_Inici.php'; ?>

<div back>
    <div class='console-container'><span id='text'></span>
        <div class='console-underscore' id='console'>&#95;</div>
    </div>
<div>

    <script>
        consoleText(['ARShop', 'Best Marketplace', 'Augment Reality Products'], 'text',['lightblue','purple','darkblue']);

        function consoleText(words, id, colors) {
            if (colors === undefined) colors = ['#fff'];
            var visible = true;
            var con = document.getElementById('console');
            var letterCount = 1;
            var x = 1;
            var waiting = false;
            var target = document.getElementById(id)
            target.setAttribute('style', 'color:' + colors[0])
            window.setInterval(function() {

                if (letterCount === 0 && waiting === false) {
                    waiting = true;
                    target.innerHTML = words[0].substring(0, letterCount)

                    window.setTimeout(function() {
                        var usedColor = colors.shift();
                        colors.push(usedColor);
                        var usedWord = words.shift();
                        words.push(usedWord);
                        x = 1;
                        target.setAttribute('style', 'color:' + colors[0])
                        letterCount += x;
                        waiting = false;
                    }, 1000)
                    } else if (letterCount === words[0].length + 1 && waiting === false) {
                    waiting = true;

                    window.setTimeout(function() {
                        x = -1;
                        letterCount += x;
                        waiting = false;
                    }, 1000)
                    } else if (waiting === false) {
                    target.innerHTML = words[0].substring(0, letterCount)
                    letterCount += x;
                    }
            }, 120)

            window.setInterval(function() {
                if (visible === true) {
                con.className = 'console-underscore hidden'
                visible = false;

                } else {
                con.className = 'console-underscore'

                visible = true;
                }
            }, 400)
        }
    </script>

    <?php //require 'views/footer.php'; ?>
</body>
</html>