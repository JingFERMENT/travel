<!DOCTYPE html>
<!-- chercher la langue par défaut de wordpress -->
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel - Mon premier site Wordpress</title>
    <!-- bootstrap -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <!-- thème et extension qui vont venir déclarerle chargement des scripts et des styles -->
    <?php wp_head(); ?>
</head>

<!-- la page home -->

<body <?php body_class(); ?>>
    <!-- les choses injectées dès l'ouveture body -->
    <?php wp_body_open(); ?>
    <header>
        <!-- nav bar -->
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="#"><img class="w-50" src="/wp-content/themes/mytravel/assets/img/logo.jpg" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <div class="navbar-nav">
                        <!-- ajouter le menu -->
                    <?php
                        $menu = wp_get_nav_menu_items('Travel');
                        foreach ($menu as $category) {
                        $categoryTitle = $category->title;
                        $categoryUrl= $category->url;
                        echo "<a class=\"nav-link fw-bold\" href=\"$categoryUrl\">$categoryTitle</a>";
                }?>
                    </div>
                </div>
            </div>
        </nav>
        <!-- nav banner image -->
        <section id="main-picture">
            <div id="overlay">
                <h1 class="text-white text-center">TRAVEL - Explorez le monde !</h1>
            </div>
        </section>
    </header>

    <main class="container">