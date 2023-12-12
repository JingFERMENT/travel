<?php

// Ajouter la prise en charge des images mises en avant
add_theme_support('post-thumbnails');
set_post_thumbnail_size(900, 400, true);
// add_image_size('panoramique',900, 400, true); // appeler le format d'image 
// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support('title-tag');

function my_script()
{
    // changer la feuille de style bootstrap
    wp_enqueue_style(
        'bootstrap',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css',
        array(),
        '5.3.2'
    );

    // changer la feuille de style bootstrap icons
    wp_enqueue_style(
        'bootstrap-icons',
        'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css',
        array(),
        '1.11.2'
    );

    // charger la feuille de style par défaut
    wp_enqueue_style(
        'travel', // le nom est unique
        get_stylesheet_uri(),
        array('bootstrap'), // dépendance des tableaus de feuilles des styles
        '1.0'
    );

    // changer la feuille de JS bootstrap
    wp_enqueue_script(
        'bootstrap',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js',
        array(),
        '1.0',
        // true // ce fichier JS se trouve dans le footer
        array(
            'strategy' => 'defer',
            'in_footer' => true,
        )
    );
}
// appeler une fonction
add_action('wp_enqueue_scripts', 'my_script');

// the most popular post 
function wpb_set_post_views($postID)
{  
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if ($count == '') {
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    } else {
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
//Get rid of prefetching to keep the count accurate
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
