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
                            <li class="nav-item mb-2"><a href ="#" class="nav-link p-0 text-body-secondary">Accueil</a></li>
                            <li class="nav-item mb-2"><a href ="#" class="nav-link p-0 text-body-secondary">Categorie 1</a></li>
                            <li class="nav-item mb-2"><a href ="#" class="nav-link p-0 text-body-secondary">Categorie 2</a></li>
                            <li class="nav-item mb-2"><a href ="#" class="nav-link p-0 text-body-secondary">Categorie 3</a></li>
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