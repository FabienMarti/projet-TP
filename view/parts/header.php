<!DOCTYPE html>
<html lang="FR" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
        <link href="assets/css/index.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/header.css" rel="stylesheet" type="text/css" />
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
        <title>Accueil</title>
    </head>
    <body>
        <header>
            <!--BG + Titre + Vignette profil-->
            <div id="headerBG" class="row">
                <div class="col-md-4 offset-md-4 text-center my-auto text-white">
                    <h1>REFEROSAURIA</h1>
                </div>
                <!-- <div class="col-md-2 offset-md-2 border border-dark rounded bg-white text-center">
                    <div class="row">
                        <div class="col">
                            <img class="border border-dark rounded my-2" alt="Image de Ben le diplo" src="assets/img/dipHead.jpg" />
                        </div>
                        <div class="col m-auto">
                            <div class="border border-dark rounded mr-4">
                                <p>Nom : Ben</p>
                                <p>Rang : Diplo</p>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-outline-dark bg-info my-2">Connexion</button>
                </div> -->
                <div class="col-md-2 offset-md-2 border border-dark rounded bg-white text-center">
                    <p>Connexion</p>
                </div>
            </div>
            <!--NavBar-->
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand d-md-none" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Accueil<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="dinoList.php">Liste des dinosaures</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Découvrir
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                <a class="dropdown-item" href="#">Paléonthologie</a>
                                <a class="dropdown-item" href="#">Herbivores</a>
                                <a class="dropdown-item" href="#">Carnivores</a>
                                <a class="dropdown-item" href="#">Animaux Volants</a>
                                <a class="dropdown-item" href="#">Animaux Marins</a>
                                <a class="dropdown-item" href="#">Insectes</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Contribuer
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                                <a class="dropdown-item" href="#">Déposer un article</a>
                                <a class="dropdown-item" href="#">Faire un don</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Jeux
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
                                <a class="dropdown-item" href="#">Quizz</a>
                                <a class="dropdown-item" href="#">Générateur de Dinom</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Quizz</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Forum</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Rechercher" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Go</button>
                    </form>
                </div>
            </nav>
        </header>