<!DOCTYPE html>
<!-- chercher la langue par défaut de wordpress -->
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel - Mon premier site Wordpress</title>
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
                <a class="navbar-brand" href="<?=get_site_url()?>"><img class="w-50" src="<?=get_template_directory_uri().'/assets/img/logo.jpg'?>" alt="un avion tourne autour d'une globe"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <div class="navbar-nav">
                        <!-- ajouter le menu -->
                    <?php
                        $navMenuItems = wp_get_nav_menu_items('menu_header');
                        foreach ($navMenuItems as $navMenuItem) {
                        $navMenuItemTitle = $navMenuItem->title;
                        $navMenuItemUrl= $navMenuItem->url;
                        echo "<a class=\"nav-link fw-bold\" href=\"$navMenuItemUrl\">$navMenuItemTitle</a>";
                }?>
                    </div>
                </div>
            </div>
        </nav>
        <!-- nav banner image -->
        <section id="main-picture">
            <div id="overlay">
                <h1 class="text-white text-center"><?php bloginfo('name');?><br><?php bloginfo('description');?></h1>
                
            </div>
        </section>
    </header>

    <main class="container py-5">