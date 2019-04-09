<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CONNECT JQUERY -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="http://code.jquery.com/jquery.js" type="text/javascript"></script>
    <!-- BULMA -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">
    <!-- Custom Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="dist/assets/css/style.css">
    <title>Document</title>
</head>
<body>
    <section class="hero is-info is-large" id="header">
    <div class="hero-head">
        <nav class="navbar">
        <div class="container">
            <div class="navbar-brand">
            <a class="navbar-item">
                <img src="https://bulma.io/images/bulma-type-white.png" alt="Logo">
            </a>
            <span class="navbar-burger burger" data-target="navbarMenuHeroB">
                <span></span>
                <span></span>
                <span></span>
            </span>
            </div>
            <div id="navbarMenuHeroB" class="navbar-menu">
            <div class="navbar-end">
                <a class="navbar-item is-active">
                HOME
                </a>
                <a class="navbar-item">
                ABOUT
                </a>
                <span class="navbar-item">
                </span>
            </div>
            </div>
        </div>
        </nav>
    </div>

    <div class="hero-body">
        <div class="container has-text-centered">
        <p class="title">
            Retrogame ESD
        </p>
        <a class="button" href="#portfolio">COLLECTION DE JEUX</a>
        </div>
    </div>
    </section>

    <!-- PODIUM -->
    <div class="container has-text-centered" id="podium">
        <p class="title is-1">
            Le PODIUM
        </p>
        <div class="columns" id="rang">
            <div class="column">
                <figure class="image is-128x128" style="margin: auto;">
                    <img src="dist/images/rang/or.jpg">
                </figure>
                <?php
                 /* CONNECT TO DATABASE */
                $bdd = new PDO('mysql:host=localhost;dbname=game_vote', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                /* SELECTIONNER DANS LA DATABASE TOUT LES DEVIS NON ARCHIVÉS EN LES TRIANT DU PLUS ANCIEN AU PLUS RÉCENT  */
                $affichageClassement = $bdd->query('SELECT id, slug_game, nb_votes FROM votes ORDER BY nb_votes DESC LIMIT 1');
                while ($donnees = $affichageClassement->fetch())
                {
                    $affichage = '<p>' . '<h1 class="title is-3">'. $donnees['slug_game'] . '</h1>' . '<h1 class="subtitle is-6">' . "Nombre de votes = ". '<strong>' .$donnees['nb_votes']. '</strong>' .'</h1>'. '</p>';
                    echo $affichage;
                }
                 ?>
            </div>
            <div class="column">
                <figure class="image is-128x128" style="margin: auto;">
                    <img src="dist/images/rang/argent.jpg">
                </figure>
                <?php
                /* SELECTIONNER DANS LA DATABASE TOUT LES DEVIS NON ARCHIVÉS EN LES TRIANT DU PLUS ANCIEN AU PLUS RÉCENT  */
                $affichageClassement = $bdd->query('SELECT id, slug_game, nb_votes FROM votes ORDER BY nb_votes DESC LIMIT 1 OFFSET 1');
                while ($donnees = $affichageClassement->fetch())
                {
                    $affichage = '<p>' . '<h1 class="title is-3">'. $donnees['slug_game'] . '</h1>' . '<h1 class="subtitle is-6">' . "Nombre de votes = ". '<strong>' .$donnees['nb_votes']. '</strong>' .'</h1>'. '</p>';
                    echo $affichage;
                }
                 ?>
            </div>
            <div class="column">
                <figure class="image is-128x128" style="margin: auto;">
                    <img src="dist/images/rang/bronze.jpg">
                </figure>
                <?php
                /* SELECTIONNER DANS LA DATABASE TOUT LES DEVIS NON ARCHIVÉS EN LES TRIANT DU PLUS ANCIEN AU PLUS RÉCENT  */
                $affichageClassement = $bdd->query('SELECT id, slug_game, nb_votes FROM votes ORDER BY nb_votes DESC LIMIT 1 OFFSET 2');
                while ($donnees = $affichageClassement->fetch())
                {
                    $affichage = '<p>' . '<h1 class="title is-3">'. $donnees['slug_game'] . '</h1>' . '<h1 class="subtitle is-6">' . "Nombre de votes = ". '<strong>' .$donnees['nb_votes']. '</strong>' .'</h1>'. '</p>';
                    echo $affichage;
                }
                 ?>
            </div>
        </div>
    </div>
    
    
    <!-- PORTFOLIO -->
    <section class="container has-text-centered" id="portfolio">
      <div class="container has-text-centered">
        <p class="title is-1">
            TOUS NOS JEUX
        </p>
        <p class="subtitle is-5">
            Voici la liste des jeux créés par les étudiants
        </p>
      </div>
      <div class="columns features portfolio">
        <div class="column is-3">
          <div class="card is-shady">
            <div class="card-image">
              <figure class="image is-4by3">
                <img src="dist/images/games/Stargazing.PNG" alt="Placeholder image" class="modal-button" data-target="modal-image2">
              </figure>
            </div>
            <div class="card-content">
              <div class="content">
                <h4>STARGAZING</h4>
                <p>Lorem ipsum dolor</p>
                
                <!-- BOUTON POPUP -->
                <div id="app" style="display:flex; justify-content: center; height: 31px;">
                    <div class="modal">
                        <div class="modal-background"></div>
                        <div class="modal-content">
                            <figure class="image is-4by3">
                                <img src="dist/images/games/Stargazing.PNG">
                            </figure>
                            <div class="has-text-centered white">
                                <p class="title is-1" style="color:white; margin-top: -60px;">
                                    Description du jeu
                                </p>
                                <p class="subtitle is-6" style="color:white;">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic placeat cum neque, temporibus officiis totam numquam vero molestias doloremque atque facere id in maiores quasi et voluptate nam corporis repellat?
                                </p>
                                <a class="button is-primary" id="voteButton" href="increase_vote.php/?slug_game=STARGAZING">Voter pour ce jeu</a>
                            </div>
                        </div>
                        <button class="modal-close"></button>
                    </div>
                    <p>
                        <button class="button is-primary" id="showModal">En savoir plus</button>
                    </p>
                    <a class="button is-primary" id="voteButton" href="increase_vote.php/?slug_game=STARGAZING">Voter pour ce jeu</a>
                </div>

                <div class="voteGame">
                    <i class="fas fa-heart"></i>
                    <?php
                    $affichageClassement = $bdd->query('SELECT slug_game, nb_votes FROM votes WHERE slug_game = "STARGAZING" ORDER BY nb_votes DESC');
                    while ($donnees = $affichageClassement->fetch())
                    {
                        $affichage = '<p>' . $donnees['nb_votes'] . '</p>';
                        echo $affichage;
                    }
                    ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="column is-3">
          <div class="card is-shady">
            <div class="card-image">
              <figure class="image is-4by3">
                <img src="dist/images/games/Pain.PNG" alt="Placeholder image">
              </figure>
            </div>
            <div class="card-content">
              <div class="content">
                <h4>PAIN</h4>
                <p>Lorem ipsum dolor</p>
                
                <!-- BOUTON POPUP -->
                <div id="app" style="display:flex; justify-content: center; height: 31px;">
                    <div class="modal">
                        <div class="modal-background"></div>
                        <div class="modal-content">
                            <figure class="image is-4by3">
                                <img src="dist/images/games/Pain.PNG">
                            </figure>
                            <div class="has-text-centered white">
                                <p class="title is-1" style="color:white; margin-top: -60px;">
                                    Description du jeu
                                </p>
                                <p class="subtitle is-6" style="color:white;">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic placeat cum neque, temporibus officiis totam numquam vero molestias doloremque atque facere id in maiores quasi et voluptate nam corporis repellat?
                                </p>
                                <a class="button is-primary" id="voteButton" href="increase_vote.php/?slug_game=PAIN">Voter pour ce jeu</a>
                            </div>
                        </div>
                        <button class="modal-close"></button>
                    </div>
                    <p>
                        <button class="button is-primary" id="showModal">En savoir plus</button>
                    </p>
                    <a class="button is-primary" id="voteButton" href="increase_vote.php/?slug_game=PAIN">Voter pour ce jeu</a>
                </div>

                <div class="voteGame">
                    <i class="fas fa-heart"></i>
                    <?php
                    $affichageClassement = $bdd->query('SELECT slug_game, nb_votes FROM votes WHERE slug_game = "PAIN" ORDER BY nb_votes DESC');
                    while ($donnees = $affichageClassement->fetch())
                    {
                        $affichage = '<p>' . $donnees['nb_votes'] . '</p>';
                        echo $affichage;
                    }
                    ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="column is-3 modal-button" data-target="modal-image">
          <div class="card is-shady">
            <div class="card-image">
              <figure class="image is-4by3">
                <img src="dist/images/games/odysee.png" alt="Placeholder image">
              </figure>
            </div>
            <div class="card-content">
              <div class="content">
                <h4>L'ODYSÉE DES PLANÈTES</h4>
                <p>Lorem ipsum dolor</p>
                
                <!-- BOUTON POPUP -->
                <div id="app" style="display:flex; justify-content: center; height: 31px;">
                    <div class="modal">
                        <div class="modal-background"></div>
                        <div class="modal-content">
                            <figure class="image is-4by3">
                                <img src="dist/images/games/macron.png">
                            </figure>
                            <div class="has-text-centered white">
                                <p class="title is-1" style="color:white; margin-top: -60px;">
                                    Description du jeu
                                </p>
                                <p class="subtitle is-6" style="color:white;">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic placeat cum neque, temporibus officiis totam numquam vero molestias doloremque atque facere id in maiores quasi et voluptate nam corporis repellat?
                                </p>
                                <a class="button is-primary" id="voteButton" href="increase_vote.php/?slug_game=ODYSÉE DES PLANÈTES">Voter pour ce jeu</a>
                            </div>
                        </div>
                        <button class="modal-close"></button>
                    </div>
                    <p>
                        <button class="button is-primary" id="showModal">En savoir plus</button>
                    </p>
                    <a class="button is-primary" id="voteButton" href="increase_vote.php/?slug_game=ODYSÉE DES PLANÈTES">Voter pour ce jeu</a>
                </div>

                <div class="voteGame">
                    <i class="fas fa-heart"></i>
                    <?php
                    $affichageClassement = $bdd->query('SELECT slug_game, nb_votes FROM votes WHERE slug_game = "ODYSÉE DES PLANÈTES" ORDER BY nb_votes DESC');
                    while ($donnees = $affichageClassement->fetch())
                    {
                        $affichage = '<p>' . $donnees['nb_votes'] . '</p>';
                        echo $affichage;
                    }
                    ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="column is-3 modal-button" data-target="modal-card">
          <div class="card is-shady">
            <div class="card-image">
              <figure class="image is-4by3">
                <img src="dist/images/games/Gabgame.PNG" alt="Placeholder image">
              </figure>
            </div>
            <div class="card-content">
              <div class="content">
                <h4>TOP / DOWN</h4>
                <p>Lorem ipsum dolor</p>
                
                <!-- BOUTON POPUP -->
                <div id="app" style="display:flex; justify-content: center; height: 31px;">
                    <div class="modal">
                        <div class="modal-background"></div>
                        <div class="modal-content">
                            <figure class="image is-4by3">
                                <img src="dist/images/games/macron.png">
                            </figure>
                            <div class="has-text-centered white">
                                <p class="title is-1" style="color:white; margin-top: -60px;">
                                    Description du jeu
                                </p>
                                <p class="subtitle is-6" style="color:white;">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic placeat cum neque, temporibus officiis totam numquam vero molestias doloremque atque facere id in maiores quasi et voluptate nam corporis repellat?
                                </p>
                                <a class="button is-primary" id="voteButton" href="increase_vote.php/?slug_game=TOP / DOWN">Voter pour ce jeu</a>
                            </div>
                        </div>
                        <button class="modal-close"></button>
                    </div>
                    <p>
                        <button class="button is-primary" id="showModal">En savoir plus</button>
                    </p>
                    <a class="button is-primary" id="voteButton" href="increase_vote.php/?slug_game=TOP / DOWN">Voter pour ce jeu</a>
                </div>

                <div class="voteGame">
                    <i class="fas fa-heart"></i>
                    <?php
                    $affichageClassement = $bdd->query('SELECT slug_game, nb_votes FROM votes WHERE slug_game = "TOP / DOWN" ORDER BY nb_votes DESC');
                    while ($donnees = $affichageClassement->fetch())
                    {
                        $affichage = '<p>' . $donnees['nb_votes'] . '</p>';
                        echo $affichage;
                    }
                    ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="columns features">
        <div class="column is-3">
          <div class="card is-shady">
            <div class="card-image">
              <figure class="image is-4by3">
                <img src="dist/images/games/Tempestgame.PNG" alt="butterfly image" class="modal-button" data-target="modal-image4">
              </figure>
            </div>
            <div class="card-content  modal-button" data-target="modal-card2">
              <div class="content">
                <h4>TEMPEST GAME</h4>
                <p>Lorem ipsum dolor</p>
                
                <!-- BOUTON POPUP -->
                <div id="app" style="display:flex; justify-content: center; height: 31px;">
                    <div class="modal">
                        <div class="modal-background"></div>
                        <div class="modal-content">
                            <figure class="image is-4by3">
                                <img src="dist/images/games/macron.png">
                            </figure>
                            <div class="has-text-centered white">
                                <p class="title is-1" style="color:white; margin-top: -60px;">
                                    Description du jeu
                                </p>
                                <p class="subtitle is-6" style="color:white;">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic placeat cum neque, temporibus officiis totam numquam vero molestias doloremque atque facere id in maiores quasi et voluptate nam corporis repellat?
                                </p>
                                <a class="button is-primary" id="voteButton" href="increase_vote.php/?slug_game=TEMPEST GAME">Voter pour ce jeu</a>
                            </div>
                        </div>
                        <button class="modal-close"></button>
                    </div>
                    <p>
                        <button class="button is-primary" id="showModal">En savoir plus</button>
                    </p>
                    <a class="button is-primary" id="voteButton" href="increase_vote.php/?slug_game=TEMPEST GAME">Voter pour ce jeu</a>
                </div>

                <div class="voteGame">
                    <i class="fas fa-heart"></i>
                    <?php
                    $affichageClassement = $bdd->query('SELECT slug_game, nb_votes FROM votes WHERE slug_game = "TEMPEST GAME" ORDER BY nb_votes DESC');
                    while ($donnees = $affichageClassement->fetch())
                    {
                        $affichage = '<p>' . $donnees['nb_votes'] . '</p>';
                        echo $affichage;
                    }
                    ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="column is-3">
          <div class="card is-shady">
            <div class="card-image">
              <figure class="image is-4by3">
                <img src="dist/images/games/zombie.png" alt="butterfly image" class="modal-button" data-target="modal-image4">
              </figure>
            </div>
            <div class="card-content  modal-button" data-target="modal-card2">
              <div class="content">
                <h4>ZOMBIE RUSH</h4>
                <p>Lorem ipsum dolor</p>
                
                <!-- BOUTON POPUP -->
                <div id="app" style="display:flex; justify-content: center; height: 31px;">
                    <div class="modal">
                        <div class="modal-background"></div>
                        <div class="modal-content">
                            <figure class="image is-4by3">
                                <img src="dist/images/games/macron.png">
                            </figure>
                            <div class="has-text-centered white">
                                <p class="title is-1" style="color:white; margin-top: -60px;">
                                    Description du jeu
                                </p>
                                <p class="subtitle is-6" style="color:white;">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic placeat cum neque, temporibus officiis totam numquam vero molestias doloremque atque facere id in maiores quasi et voluptate nam corporis repellat?
                                </p>
                                <a class="button is-primary" id="voteButton" href="increase_vote.php/?slug_game=ZOMBIE RUSH">Voter pour ce jeu</a>
                            </div>
                        </div>
                        <button class="modal-close"></button>
                    </div>
                    <p>
                        <button class="button is-primary" id="showModal">En savoir plus</button>
                    </p>
                    <a class="button is-primary" id="voteButton" href="increase_vote.php/?slug_game=ZOMBIE RUSH">Voter pour ce jeu</a>
                </div>

                <div class="voteGame">
                    <i class="fas fa-heart"></i>
                    <?php
                    $affichageClassement = $bdd->query('SELECT slug_game, nb_votes FROM votes WHERE slug_game = "ZOMBIE RUSH" ORDER BY nb_votes DESC');
                    while ($donnees = $affichageClassement->fetch())
                    {
                        $affichage = '<p>' . $donnees['nb_votes'] . '</p>';
                        echo $affichage;
                    }
                    ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="column is-3">
          <div class="card is-shady">
            <div class="card-image">
              <figure class="image is-4by3">
                <img src="dist/images/games/Fleuresdumal.PNG" alt="butterfly image" class="modal-button" data-target="modal-image4">
              </figure>
            </div>
            <div class="card-content  modal-button" data-target="modal-card2">
              <div class="content">
                <h4>LES FLEURS DU MAL</h4>
                <p>Lorem ipsum dolor</p>
                
                <!-- BOUTON POPUP -->
                <div id="app" style="display:flex; justify-content: center; height: 31px;">
                    <div class="modal">
                        <div class="modal-background"></div>
                        <div class="modal-content">
                            <figure class="image is-4by3">
                                <img src="dist/images/games/macron.png">
                            </figure>
                            <div class="has-text-centered white">
                                <p class="title is-1" style="color:white; margin-top: -60px;">
                                    Description du jeu
                                </p>
                                <p class="subtitle is-6" style="color:white;">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic placeat cum neque, temporibus officiis totam numquam vero molestias doloremque atque facere id in maiores quasi et voluptate nam corporis repellat?
                                </p>
                                <a class="button is-primary" id="voteButton" href="increase_vote.php/?slug_game=LES FLEURS DU MAL">Voter pour ce jeu</a>
                            </div>
                        </div>
                        <button class="modal-close"></button>
                    </div>
                    <p>
                        <button class="button is-primary" id="showModal">En savoir plus</button>
                    </p>
                    <a class="button is-primary" id="voteButton" href="increase_vote.php/?slug_game=LES FLEURS DU MAL">Voter pour ce jeu</a>
                </div>

                <div class="voteGame">
                    <i class="fas fa-heart"></i>
                    <?php
                    $affichageClassement = $bdd->query('SELECT slug_game, nb_votes FROM votes WHERE slug_game = "LES FLEURS DU MAL" ORDER BY nb_votes DESC');
                    while ($donnees = $affichageClassement->fetch())
                    {
                        $affichage = '<p>' . $donnees['nb_votes'] . '</p>';
                        echo $affichage;
                    }
                    ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="column is-3">
          <div class="card is-shady">
            <div class="card-image">
              <figure class="image is-4by3">
                <img src="dist/images/games/spell.png" alt="butterfly image" class="modal-button" data-target="modal-image4">
              </figure>
            </div>
            <div class="card-content  modal-button" data-target="modal-card2">
              <div class="content">
                <h4>SPELLSIGN</h4>
                <p>Lorem ipsum dolor</p>
                
                <!-- BOUTON POPUP -->
                <div id="app" style="display:flex; justify-content: center; height: 31px;">
                    <div class="modal">
                        <div class="modal-background"></div>
                        <div class="modal-content">
                            <figure class="image is-4by3">
                                <img src="dist/images/games/macron.png">
                            </figure>
                            <div class="has-text-centered white">
                                <p class="title is-1" style="color:white; margin-top: -60px;">
                                    Description du jeu
                                </p>
                                <p class="subtitle is-6" style="color:white;">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic placeat cum neque, temporibus officiis totam numquam vero molestias doloremque atque facere id in maiores quasi et voluptate nam corporis repellat?
                                </p>
                                <a class="button is-primary" id="voteButton" href="increase_vote.php/?slug_game=SPELLSIGN">Voter pour ce jeu</a>
                            </div>
                        </div>
                        <button class="modal-close"></button>
                    </div>
                    <p>
                        <button class="button is-primary" id="showModal">En savoir plus</button>
                    </p>
                    <a class="button is-primary" id="voteButton" href="increase_vote.php/?slug_game=SPELLSIGN">Voter pour ce jeu</a>
                </div>

                <div class="voteGame">
                    <i class="fas fa-heart"></i>
                    <?php
                    $affichageClassement = $bdd->query('SELECT slug_game, nb_votes FROM votes WHERE slug_game = "SPELLSIGN" ORDER BY nb_votes DESC');
                    while ($donnees = $affichageClassement->fetch())
                    {
                        $affichage = '<p>' . $donnees['nb_votes'] . '</p>';
                        echo $affichage;
                    }
                    ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="columns features portfolio">
        <div class="column is-3">
          <div class="card is-shady">
            <div class="card-image">
              <figure class="image is-4by3">
                <img src="dist/images/games/Schoolfighter.PNG" alt="Placeholder image" class="modal-button" data-target="modal-image2">
              </figure>
            </div>
            <div class="card-content">
              <div class="content">
                <h4>SCHOOL FIGHTER</h4>
                <p>Lorem ipsum dolor</p>
                
                <!-- BOUTON POPUP -->
                <div id="app" style="display:flex; justify-content: center; height: 31px;">
                    <div class="modal">
                        <div class="modal-background"></div>
                        <div class="modal-content">
                            <figure class="image is-4by3">
                                <img src="dist/images/games/macron.png">
                            </figure>
                            <div class="has-text-centered white">
                                <p class="title is-1" style="color:white; margin-top: -60px;">
                                    Description du jeu
                                </p>
                                <p class="subtitle is-6" style="color:white;">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic placeat cum neque, temporibus officiis totam numquam vero molestias doloremque atque facere id in maiores quasi et voluptate nam corporis repellat?
                                </p>
                                <a class="button is-primary" id="voteButton" href="increase_vote.php/?slug_game=SCHOOL FIGHTER">Voter pour ce jeu</a>
                            </div>
                        </div>
                        <button class="modal-close"></button>
                    </div>
                    <p>
                        <button class="button is-primary" id="showModal">En savoir plus</button>
                    </p>
                    <a class="button is-primary" id="voteButton" href="increase_vote.php/?slug_game=SCHOOL FIGHTER">Voter pour ce jeu</a>
                </div>

                <div class="voteGame">
                    <i class="fas fa-heart"></i>
                    <?php
                    $affichageClassement = $bdd->query('SELECT slug_game, nb_votes FROM votes WHERE slug_game = "SCHOOL FIGHTER" ORDER BY nb_votes DESC');
                    while ($donnees = $affichageClassement->fetch())
                    {
                        $affichage = '<p>' . $donnees['nb_votes'] . '</p>';
                        echo $affichage;
                    }
                    ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="column is-3">
          <div class="card is-shady">
            <div class="card-image">
              <figure class="image is-4by3">
                <img src="dist/images/games/macron.png" alt="Placeholder image">
              </figure>
            </div>
            <div class="card-content">
              <div class="content">
                <h4>MACRONIE THE GAME</h4>
                <p>Lorem ipsum dolor</p>

                <!-- BOUTON POPUP -->
                <div id="app" style="display:flex; justify-content: center; height: 31px;">
                    <div class="modal">
                        <div class="modal-background"></div>
                        <div class="modal-content">
                            <figure class="image is-4by3">
                                <img src="dist/images/games/macron.png">
                            </figure>
                            <div class="has-text-centered white">
                                <p class="title is-1" style="color:white; margin-top: -60px;">
                                    Description du jeu
                                </p>
                                <p class="subtitle is-6" style="color:white;">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic placeat cum neque, temporibus officiis totam numquam vero molestias doloremque atque facere id in maiores quasi et voluptate nam corporis repellat?
                                </p>
                                <a class="button is-primary" id="voteButton" href="increase_vote.php/?slug_game=MACRONIE THE GAME">Voter pour ce jeu</a>
                            </div>
                        </div>
                        <button class="modal-close"></button>
                    </div>
                    <p>
                        <button class="button is-primary" id="showModal">En savoir plus</button>
                    </p>
                    <a class="button is-primary" id="voteButton" href="increase_vote.php/?slug_game=MACRONIE THE GAME">Voter pour ce jeu</a>
                </div>
                
                <div class="voteGame">
                    <i class="fas fa-heart"></i>
                    <?php
                    $affichageClassement = $bdd->query('SELECT slug_game, nb_votes FROM votes WHERE slug_game = "MACRONIE THE GAME" ORDER BY nb_votes DESC');
                    while ($donnees = $affichageClassement->fetch())
                    {
                        $affichage = '<p>' . $donnees['nb_votes'] . '</p>';
                        echo $affichage;
                    }
                    ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
    </section>





    <!-- SECTION A PROPOS -->
    <section class="hero is-medium is-primary is-bold" id="team">
        <div class="hero-body">
            <div class="container has-text-centered">
            <h1 class="title">
                A propos
            </h1>
            <h2 class="subtitle">
                Apprenez en plus sur les étudiants qui ont travaillé pour ces jeux
            </h2>
            <a class="button is-success">Découvrir</a>
            </div>
        </div>
    </section>          




    <!-- SECTION COMMENTAIRE -->
    <?php
    if(isset($_POST['submit_commentaire'])){
      if(isset($_POST['pseudo'], $_POST['commentaire']) AND !empty($_POST['pseudo']) AND !empty($_POST['commentaire'])){
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $commentaire = htmlspecialchars($_POST['commentaire']);

        $ins = $bdd->prepare('INSERT INTO comment (pseudo, commentaire) VALUES (?,?)');
        $ins->execute(array($pseudo, $commentaire));

      } else {
        $c_erreur = "Tous les champs doivent être remplis";
      }
    }
    ?>

    <section class="container" id="commentSection">
      <h1 class="title is-1 has-text-centered">Commentaires</h1>
      
      <?php 

      $affichageCommentaires = $bdd->query('SELECT pseudo, commentaire FROM comment');
      while ($donnees = $affichageCommentaires->fetch())
      {
          ?>
          <?php
          $affichage = '<div class="commentaire">' . '<h1 class="title is-5">' . $donnees['pseudo'] .' :' . '</h1>' . '<p>' . $donnees['commentaire'] . '</p>' . '</div>' . '<br>';
          echo $affichage;
          ?>
          </div>
          <?php
      }
      ?>
      <form method="post">
        <input type="text" name="pseudo" placeholder="Votre pseudo" /> <br />
        <textarea name="commentaire" placeholder="Votre commentaire ..."></textarea> <br />
        <input type="submit" value="Poster mon commentaire" name="submit_commentaire" id="submit" />
      </form>
      <?php
      if(isset($c_erreur)){
        echo '<span style="color: red; font-weight: bolder;">' . $c_erreur . "</span>";
      }
      ?>
    </section>



    <!-- CONNECT TO JS -->
    <script src="src/assets/js/popup.js"></script>
</body>
</html>


