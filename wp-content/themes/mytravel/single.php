<?php get_header(); ?>

<div class="row">
    <!-- side bar -->
    <section class="col-12 col-lg-4">
        <h5 class="text-center fw-bold">Sur le même sujet</h5>
        <div class="text-center pb-5">
        <img src="<?= get_template_directory_uri() . '/assets/img/image_vaguette-removebg-preview.png' ?>" alt="image d'une vaguette">
        </div>
        <div class="row">
            <?php
            $category = get_the_category();
            $categoryName = $category[0]->cat_name;
            // 1. arguments pour définir la récupération des données
            $args = array(
                'post_type' => 'post', // type de publication
                'category_name' => $categoryName,
                'posts_per_page' => 3, // tous les articles
                'order' => 'DESC',
                'post__not_in' => array(($post->ID)),// exclure l'artcile déjà présent
                // 'offset' => 1,
            );

            // 2. exécuter la WP Query
            $the_query = new WP_Query($args);

            // 3. lancer la boucle 
            if ($the_query->have_posts()) {
                while ($the_query->have_posts()) {
                    $the_query->the_post() ?>
                    <div class="col-12">
                        <a class ="text-decoration-none" target="_blank" href="<?php the_permalink() ?>">
                            <div class="card border-0 rounded-0 mb-3 mx-lg-5 h-100">
                                <div class="h-50">
                                    <?php the_post_thumbnail('large', array('class' => 'objectif-fit-cover h-100 w-100')); ?>
                                </div>
                                <div class="card-body h-50">
                                    <h5 class="card-title fw-bold title-bleu"><?php the_title() ?></h5>
                                </div>
                            </div>
                    </div></a>
                <?php }
                // 4. restore the $post global to the current post in the main query
                wp_reset_postdata();
            } else { ?>
                <p><?php __('Désolé, aucun article ne correspond à vos critères'); ?></p>
            <?php } ?>
            <!-- <div class="col-12">
                <div class="card border-0 rounded-0 mb-3 mx-lg-5">
                    <img src="/wp-content/themes/mytravel/assets/img/paris.jpeg" class="img-fluid card-img-top rounded-0" alt="...">
                    <div class="card-body">
                        <h5 class="card-title fw-bold title-bleu text-center">Titre de l'article</h5>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card border-0 rounded-0 mb-3 mx-lg-5">
                    <img src="/wp-content/themes/mytravel/assets/img/paris.jpeg" class="img-fluid card-img-top rounded-0" alt="...">
                    <div class="card-body">
                        <h5 class="card-title fw-bold title-bleu text-center">Titre de l'article</h5>
                    </div>
                </div>
            </div>
        </div> -->
    </section>

    <!-- article -->
    <section class="col-12 col-lg-8">
        <h1 class="text-uppercase pt-5"><?php the_title(); ?></h1>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <p><?php the_author(); ?> - <?php the_date(); ?></p>

                <div class="pb-3">
                    <p><?php the_content(); ?></p>
                </div>
        <?php endwhile;
        endif; ?>

        <?php wpb_set_post_views(get_the_ID());?>
        
        <!-- <img class="img-fluid" src="/wp-content/themes/mytravel/assets/img/grande-muraille-chine.jpg" alt="">
        <div class="py-5">
            <p>Généralement, on utilise un texte en faux latin (le texte ne veut rien dire, il a été modifié), le Lorem ipsum ou Lipsum, qui permet donc de faire office de texte d'attente. L'avantage de le mettre en latin est que l'opérateur sait au premier coup d'oeil que la page contenant ces lignes n'est pas valide, et surtout l'attention du client n'est pas dérangée par le contenu, il demeure concentré seulement sur l'aspect graphique.
            </p>
            <p>Ce texte a pour autre avantage d'utiliser des mots de longueur variable, essayant de simuler une occupation normale. La méthode simpliste consistant à copier-coller un court texte plusieurs fois (« ceci est un faux-texte ceci est un faux-texte ceci est un faux-texte ceci est un faux-texte ceci est un faux-texte ») a l'inconvénient de ne pas permettre une juste appréciation typographique du résultat final.</p>
            <p>Il circule des centaines de versions différentes du Lorem ipsum, mais ce texte aurait originellement été tiré de l'ouvrage de Cicéron, De Finibus Bonorum et Malorum (Liber Primus, 32), texte populaire à cette époque, dont l'une des premières phrases est : « Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit... » (« Il n'existe personne qui aime la souffrance pour elle-même, ni qui la recherche ni qui la veuille pour ce qu'elle est... »).</p>
        </div> -->
        
    </section>

</div>

<?php get_footer(); ?>