<?php include 'functions.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="#">
    <link rel="stylesheet" href="node_modules/normalize.css/normalize.css">
    <link rel="stylesheet" href="/style.css" />
    <title>Rosa Gaulí – Diseñadora & Artista Textil</title>
    <meta name="description" content="Nuestras colecciones frescas y chic de suéteres, chalecos, cárdigans, chalecos largos y sudaderas de mujer de la colección Rosa Gaulí.">
</head>

<body <?php getHomePageClass(); ?>>
    <header>
        <nav id="nav_left">
            <a href="/"><img src="/images/logo_header.png" alt="Logo Rosa Gaulí" id="logo_rosa_gauli" /></a>
            <ul>
                <li><a href="pages/about.php">About</a></li>
                <li><a href="pages/statement.php">Statement</a></li>
                <li><a href="pages/human-project.php">Human Project</a></li>
            </ul>
        </nav>
        <nav id="nav_right">
            <ul>
                <li><a href="pages/shop.php">Shop</a></li>
                <li><a href="pages/contact.php">Contact</a></li>
                <li>
                    <a href=""><i aria-hidden="true" class="fab fa-instagram"></i></a>
                </li>
            </ul>
            <a href="#" id="hamburger_menu" onclick="openNav()">
                <i class="fas fa-bars"></i>
            </a>
        </nav>
    </header>

    <div id="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <nav>
            <ul>
                <li><a href="pages/about.php">About</a></li>
                <li><a href="pages/statement.php">Statement</a></li>
                <li><a href="pages/human-project.php">Human Project</a></li>
                <li><a href="pages/shop.php">Shop</a></li>
                <li><a href="pages/contact.php">Contact</a></li>
                <li><a href=""><i aria-hidden="true" class="fab fa-instagram"></i></a></li>
            </ul>
        </nav>
    </div>