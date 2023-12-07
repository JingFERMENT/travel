<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel - Mon premier site Wordpress</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <!-- my personal style sheet -->
    <link rel="stylesheet" href="wp-content/themes/mytravel/style.css">
</head>

<body>
    <header>
        <!-- nav bar -->
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="#"><img class="w-50" src="/wp-content/themes/mytravel/assets/logo.jpg" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <div class="navbar-nav">
                        <a class="nav-link fw-bold" href="#">Catégorie 1</a>
                        <a class="nav-link fw-bold" href="#">Catégorie 2</a>
                        <a class="nav-link fw-bold" href="#">Catégorie 3</a>
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
        <div class="row">
            <!-- side bar -->
            <section class="col-12 col-lg-4">
                <h5 class="p-4 text-center">Sur le même sujet</h5>
                <div class="row">
                    <div class="col-12">
                        <div class="card border-0 rounded-0 mb-3 mx-lg-5">
                            <img src="/wp-content/themes/mytravel/assets/paris.jpeg" class="img-fluid card-img-top rounded-0" alt="...">
                            <div class="card-body ">
                                <h5 class="card-title fw-bold title-bleu text-center">Titre de l'article</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 m-auto">
                        <div class="card border-0 rounded-0 mb-3 mx-lg-5">
                            <img src="/wp-content/themes/mytravel/assets/paris.jpeg" class="img-fluid card-img-top rounded-0" alt="...">
                            <div class="card-body">
                                <h5 class="card-title fw-bold title-bleu text-center">Titre de l'article</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card border-0 rounded-0 mb-3 mx-lg-5">
                            <img src="/wp-content/themes/mytravel/assets/paris.jpeg" class="img-fluid card-img-top rounded-0" alt="...">
                            <div class="card-body">
                                <h5 class="card-title fw-bold title-bleu text-center">Titre de l'article</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- article -->
            <section class="col-12 col-lg-8">
                <h1 class="text-uppercase">Titre de l'article</h1>
                <p>Thierry Lachat - Vendredi 04 mars 2022</p>
                
                <div class="py-5">
                    <p class="text-justify">Voyez ce jeu exquis wallon, de graphie en kit mais bref. Portez ce vieux whisky au juge blond qui fume sur son île intérieure, à côté de l"alcôve ovoïde, où les bûches se consument dans l"âtre, ce qui lui permet de penser à la cænogenèse de l"être dont il est question dans la cause ambiguë entendue à Moÿ, dans un capharnaüm qui, pense-t-il, diminue çà et là la qualité de son œuvre. Prouvez, beau juge, que le fameux sandwich au yak tue. L"île exiguë, Où.</p>
                </div>
                <img class="img-fluid w-100" src="/wp-content/themes/mytravel/assets/grande-muraille-chine.jpg" alt="">
                
                <div class="py-5">
                    <p>Généralement, on utilise un texte en faux latin (le texte ne veut rien dire, il a été modifié), le Lorem ipsum ou Lipsum, qui permet donc de faire office de texte d'attente. L'avantage de le mettre en latin est que l'opérateur sait au premier coup d'oeil que la page contenant ces lignes n'est pas valide, et surtout l'attention du client n'est pas dérangée par le contenu, il demeure concentré seulement sur l'aspect graphique.
                    </p>
                    <p>Ce texte a pour autre avantage d'utiliser des mots de longueur variable, essayant de simuler une occupation normale. La méthode simpliste consistant à copier-coller un court texte plusieurs fois (« ceci est un faux-texte ceci est un faux-texte ceci est un faux-texte ceci est un faux-texte ceci est un faux-texte ») a l'inconvénient de ne pas permettre une juste appréciation typographique du résultat final.</p>
                    <p>Il circule des centaines de versions différentes du Lorem ipsum, mais ce texte aurait originellement été tiré de l'ouvrage de Cicéron, De Finibus Bonorum et Malorum (Liber Primus, 32), texte populaire à cette époque, dont l'une des premières phrases est : « Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit... » (« Il n'existe personne qui aime la souffrance pour elle-même, ni qui la recherche ni qui la veuille pour ce qu'elle est... »).</p>
                </div>
                </section>

        </div>

    </main>

    <footer>
        <!-- footer banner image-->
        <section id="footer-picture">
        </section>

        <!-- section footer card -->
        <section id="footer-body" class="py-5">

            <!-- footer title -->
            <div class="container text-center mb-3 mb-lg-5">
                <h5 class="text-uppercase">Découvrez</h5>
                <h2 class="fw-bold">Articles les plus populaires</h2>
                <hr>
            </div>


            <div class="row">
                <!-- footer card 1 -->
                <div class="col-12 col-lg-4">
                    <div class="card rounded-0 mb-3 mx-lg-5">
                        <img src="/wp-content/themes/mytravel/assets/paris.jpeg" class="img-fluid card-img-top rounded-0" alt="...">
                        <div class="card-body p-5">
                            <h5 class="card-title fw-bold title-bleu">Titre de l'article</h5>
                            <p class="card-text">Description de l'article sur plusieurs lignes.</p>
                        </div>
                    </div>
                </div>

                <!-- footer card 2-->
                <div class="col-12 col-lg-4">
                    <div class="card rounded-0 mb-3 mx-lg-5">
                        <img src="/wp-content/themes/mytravel/assets/paris.jpeg" class="img-fluid card-img-top rounded-0" alt="...">
                        <div class="card-body p-5">
                            <h5 class="card-title fw-bold title-bleu">Titre de l'article</h5>
                            <p class="card-text">Description de l'article sur plusieurs lignes.</p>
                        </div>
                    </div>
                </div>

                <!-- footer card 3 -->
                <div class="col-12 col-lg-4">
                    <div class="card rounded-0 mb-3 mx-lg-5">
                        <img src="/wp-content/themes/mytravel/assets/paris.jpeg" class="img-fluid card-img-top rounded-0" alt="...">
                        <div class="card-body p-5">
                            <h5 class="card-title fw-bold title-bleu">Titre de l'article</h5>
                            <p class="card-text">Description de l'article sur plusieurs lignes.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- section footer nav-bar -->
        <section class="footer-nav-bar py-5">
            <div class="row">
                <div class="col-12 col-md-4 text-center">
                    <h5 class="fw-bold">Accès rapide</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Accueil</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Categorie 1</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Categorie 2</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Categorie 3</a></li>
                    </ul>
                </div>
                <div class="col-12 col-md-4 text-center">
                    <h5 class="fw-bold">Contactez-nous</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2 p-0 text-body-secondary">70 rue des jacobins</li>
                        <li class="nav-item mb-2 p-0 text-body-secondary">80000 Amiens</li>
                        <li class="nav-item mb-2 mb-2 p-0 text-body-secondary">Contactus@lamanu.fr</li>
                    </ul>
                </div>
                <div class="col-12 col-md-4 text-center">
                    <form>
                        <h6 class="text-center fw-bold">Inscrivez-vous à notre newsletter</h6>
                        <label for="email" class="visually-hidden">Email</label>
                        <input type="email" class="rounded-0" placeholder="Entrez votre email"></input>
                    </form>
                </div>
            </div>
        </section>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>