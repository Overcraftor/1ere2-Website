<?php $page="home"; require "./php/config.php"; ?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>1ère2 - Accueil</title>
        <link rel="icon" href="./logo.jpg">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <?php include $GLOBALS["rootPath"] . "/templates/head.php";?>

        <link rel="stylesheet" type="text/css" href="css/home.css?v=0.11">
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

        <?php include $GLOBALS["rootPath"] . "/templates/script.php"?>
    </body>
</html>