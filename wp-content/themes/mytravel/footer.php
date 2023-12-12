</main>
<footer>
    <!-- footer banner image-->
    <section id="footer-picture">
    </section>

    <!-- section footer card -->
    <section id="footer-body" class="container-fluid py-5">

        <!-- footer title -->
        <div class="text-center text-white mb-3 mb-lg-5">
            <h5 class="text-uppercase">Découvrez</h5>
            <h2 class="fw-bold ls-widest">Articles les plus populaires</h2>
            <img src="<?= get_template_directory_uri() . '/assets/img/image_vaguette-removebg-preview.png' ?>" alt="image d'une vaguette">
        </div>

        <div class="row">
            <?php
            // 1. arguments pour définir la récupération des données
            $args = array(
                'post_type' => 'post', // type de publication
                'meta_key' => 'wpb_post_views_count',
                'orderby' => 'meta_value_num', // Order by numeric meta value
                'order' => 'DESC',
                'posts_per_page' => 3, // tous les articles
            );

            // 2. exécuter la WP Query
            $popularpost = new WP_Query($args);

            // 3. lancer la boucle 

            if ($popularpost->have_posts()) : while ($popularpost->have_posts()) : $popularpost->the_post(); ?>
                    <!-- footer card  -->
                    <div class="col-12 col-lg-4">
                        <a class="text-decoration-none" target="_blank" href="<?php the_permalink() ?>">
                            <div class="card rounded-0 mb-3 mx-lg-5 h-100 border-0">
                                <div class="h-50">
                                    <?php the_post_thumbnail('large', array('class' => 'object-fit-cover w-100 h-100')); ?>
                                    <div class="card-img-overlay px-0 text-end">
                                        <h5><span class="badge text-bg-warning rounded-0 px-3">Catégorie</span></h5>
                                    </div>
                                </div>
                                <div class="card-body h-50 p-5">
                                    <h5 class="card-title fw-bold title-bleu"><?php the_title() ?></h5>
                                    <p class="card-text">
                                        <?php
                                        $excerpt = get_the_excerpt();
                                        $excerpt = substr($excerpt, 0, 100);
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
            <!-- <div class="col-12 col-lg-4">
                <div class="card rounded-0 mb-3 mx-lg-5">
                    <img src="/wp-content/themes/mytravel/assets/img/paris.jpeg" class="img-fluid card-img-top rounded-0" alt="...">
                    <div class="card-body p-5">
                        <h5 class="card-title fw-bold title-bleu">Titre de l'article</h5>
                        <p class="card-text">Description de l'article sur plusieurs lignes.</p>
                    </div>
                </div>
            </div> -->
        </div>
    </section>

    <section class="container-fluid footer-nav-bar">
        <div class="row py-5">
            <div class="col-12 col-md-4 text-center mb-5">
                <h5 class="fw-bold text-white">Accès rapide</h5>
                <!-- footer nav-bar -->
                <ul class="nav flex-column">
                    <!-- ajout menu dynamique -->
                    <?php
                    $navMenuItems = wp_get_nav_menu_items('menu_footer');
                    foreach ($navMenuItems as $navMenuItem) {
                        $navMenuItemTitle = $navMenuItem->title;
                        $navMenuItemUrl = $navMenuItem->url;
                        echo "<li class=\"nav-item mb-2\"><a class=\"nav-link p-0 text-white\" href=\"$navMenuItemUrl\">$navMenuItemTitle</a></li>";
                    } ?>

                    <!-- <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Accueil</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Categorie 1</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Categorie 2</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Categorie 3</a></li> -->
                </ul>
            </div>
            <!-- footer contact -->
            <div class="col-12 col-md-4 text-center text-white mb-5">
                <h5 class="fw-bold">Contactez-nous</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2 p-0">70 rue des jacobins</li>
                    <li class="nav-item mb-2 p-0">80000 Amiens</li>
                    <li class="nav-item mb-2 mb-2 p-0">contactus@lamanu.fr</li>
                </ul>
            </div>
            <!-- footer newsletter -->
            <div class="col-12 col-md-4 text-center text-white mb-5">
                <form>
                    <h6 class="fw-bold">Inscrivez-vous à notre newsletter</h6>
                    <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                        <label for="newsletter" class="visually-hidden">Email</label>
                        <div class="input-group mx-5">
                            <input type="email" class="form-control rounded-0" placeholder="Entrez votre email" id="newsletter"></input>
                            <button class="btn border-0 bg-info rounded-0" type="button" id="newsletter"><i class="bi bi-envelope-fill text-white fs-4"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</footer>
<?php wp_footer(); ?>

</body>

</html>