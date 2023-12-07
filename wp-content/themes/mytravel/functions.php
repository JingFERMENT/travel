<?php

// Ajouter la prise en charge des images mises en avant
add_theme_support('post-thumbnails');

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support('title-tag');

function my_script()
{
    // charger la feuille de style par défaut
    wp_enqueue_style(
        'travel', // le nom est unique
        get_stylesheet_uri(),
        array('bootstrap'), // dépendance des tableaus de feuilles des styles
        '1.0'
    );

    // changer la feuille de style bootstrap
    wp_enqueue_style(
        'bootstrap', 
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css',
        array(),
        '5.3.2'
    );

    // changer la feuille de JS bootstrap
    wp_enqueue_script(
        'bootstrap',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js',
        array(),
        '1.0',
        // true // ce fichier JS se trouve dans le footer
        array('strategy' => 'defer',
        'in_footer' => true,)
    );
}
// appeler une fonction
add_action('wp_enqueue_scripts', 'my_script');
