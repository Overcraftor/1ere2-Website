<?php $page="home"; require "./php/config.php"; ?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>2nd2 - Accueil</title>
        <link rel="icon" href="./logo.jpg">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <?php include $GLOBALS["rootPath"] . "/templates/head.php";?>

        <link rel="stylesheet" type="text/css" href="css/home.css?v=0.01">
    </head>

    <body>
        <div id="filter">
        </div>

        <header>
            <?php include $GLOBALS["rootPath"] . "/templates/header.php";?>
        </header>

        <main>
            <p>Ce site est en développement</p>
        </main>
        <footer>
            <?php include $GLOBALS["rootPath"] . "/templates/footer.php";?>
        </footer>

        <script type='text/javascript' src="//code.jquery.com/jquery-1.10.2.min.js"></script>
        <script type="text/javascript" src="/js/main.js"></script>
        <script src="https://kit.fontawesome.com/1aaa94c165.js" crossorigin="anonymous"></script>
    </body>
</html>