<?php include("session.php"); ?>
<!DOCTYPE html>
<html lang=it>

    <head>
        <meta charset="utf-8">
        <title>Biblioteca - Home</title>
        <meta name="description" content="Homepage del sito della biblioteca Civica di Alba">
        <link rel="shortcut icon" type="image/png" href="resources/favicon.ico" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="resources/main.css">

    </head>

    <body>
        <div class="topBar">
            <a class="logo" href="home.php">
                <div class="logo">
                    <img src="resources/logo.svg" alt="logo biblioteca">
                    <span>Biblioteca Civica di Alba</span>
                </div>
            </a>
            <div class="menu">
                <a class="active" href="home.php">Home</a>
                <a href="home.php">Libri</a>
                <a href="home.php">Registrami</a>
                <?php
                    if (empty($_SESSION["login_user"]))
                        echo '<a href="login.php">Login</a>';
                    else
                        echo '<a href="">Login</a>';
                ?>
                <?php
                    if (!empty($_SESSION["login_user"]))
                        echo '<a href="logout.php">Logout</a>';
                    else
                        echo '<a href="">Logout</a>';
                ?>

            </div>
        </div>
    </body>
</html>

