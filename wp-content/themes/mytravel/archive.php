<?php get_header(); ?>

<!-- section category card -->
<section id="category-body" class="py-5">

    <!-- category card title -->
    <div class="container text-center mb-3 mb-lg-5">
        <?php $categories = get_the_category();
        foreach ($categories as $category) {
            $categoryName = $category->cat_name;
            $categoryDescription = $category->description;
        } ?><h2 class="fw-bold">
            <?= $categoryName ?>
        </h2>
        <img src="<?= get_template_directory_uri() . '/assets/img/image_vaguette-removebg-preview.png' ?>" alt="image d'une vaguette">
        <h5 class="py-2"><?= $categoryDescription ?></h5>
    </div>


    <div class="row">
        <?php
        // 1. arguments pour définir la récupération des données
        $args = array(
            'post_type' => 'post', // type de publication
            'category_name' => $categoryName,
            'posts_per_page' => -1, // tous les articles
        );

        // 2. exécuter la WP Query stretch-link
        $the_query = new WP_Query($args);

        // 3. lancer la boucle 
        if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <!-- category card  -->
                <div class="col-12 col-lg-4 mb-5">
                    <a class="text-decoration-none" target="_blank" href="<?php the_permalink() ?>">
                        <div class="card rounded-0 mb-3 mx-lg-5 h-100">
                            <div class="h-50">
                                <?php the_post_thumbnail('large', array('class' => 'object-fit-cover w-100 h-100')); ?>
                            </div>
                            <div class="card-body p-5 h-50">
                                <h5 class="card-title fw-bold title-bleu"><?php the_title() ?></h5>
                                <p class="card-text">
                                    <?php
                                    $excerpt = get_the_excerpt();
                                    $excerpt = substr($excerpt, 0, 100); // Only display first 100 characters of excerpt
                                    $result = substr($excerpt, 0, strrpos($excerpt, ' ')) . '...';
                                    echo $result;
                                    ?>
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endwhile;
            // 4. restore the $post global to the current post in the main query
            wp_reset_postdata();
        else : ?>
            <p>Désolé, aucun article ne correspond à vos critères.</p>
        <?php endif; ?>
</section>

<?php get_footer(); ?>