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
                <a class="navbar-item" href="index.php">
                HOME
                </a>
                <a class="navbar-item" href="about.php">
                ABOUT
                </a>
                <a class="navbar-item is-active" href="team.php">
                NOTRE TEAM
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
            NOTRE TEAM
        </p>
        <a class="button" href="#teamPage">À votre service</a>
        </div>
    </div>
    </section>

    <section class="section presentationTeam" id="teamPage">
            <div class="container has-text-centered">
                <h2 class="title equipe">L'équipe</h2>
                <p>Nous sommes une équipe de trois étudiants de l'école supérieure du digital de Bordeaux (ESD) et nous avons créé ce site dans le but de vous présenter et de classer les jeux créés par les élèves de troisième année.</p>
    
                <div class="columns is-centered" style="padding: 2rem">
                    <div class="column">
                        <div class="card">
                            <div class="card-image">
                                <figure class="image is-4by3">
                                    <img src="dist/images/team/guillaume.jpg" alt="Placeholder image">
                                </figure>
                            </div>
                            <div class="card-content">
                                <div class="media">
                                    <div class="media-content">
                                        <p class="title is-4">Guillaume LEY</p>
                                        <p class="subtitle is-6">@guillaume_ley</p>
                                    </div>
                                </div>
    
                                <div class="content">
                                    Étudiant ayant un profil très axé sur le développement et sur l'UI/UX Design.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="card">
                            <div class="card-image">
                                <figure class="image is-4by3">
                                    <img src="dist/images/team/jules.jpg"" alt="Placeholder image">
                                </figure>
                            </div>
                            <div class="card-content">
                                <div class="media">
                                    <div class="media-content">
                                        <p class="title is-4">Jules TAPIN</p>
                                        <p class="subtitle is-6">@elrules45</p>
                                    </div>
                                </div>
    
                                <div class="content">
                                    Étudiant ayant un profil très axé sur la communication et sur l'UI/UX Design.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column">
                        <div class="card">
                            <div class="card-image">
                                <figure class="image is-4by3">
                                    <img src="dist/images/team/jeremy.jpg"" alt="Placeholder image">
                                </figure>
                            </div>
                            <div class="card-content">
                                <div class="media">
                                    <div class="media-content">
                                        <p class="title is-4">Jeremy GRollier</p>
                                        <p class="subtitle is-6">@jeremygrollier</p>
                                    </div>
                                </div>
    
                                <div class="content">
                                        Étudiant ayant un profil très axé sur l'UI/UX Design et sur la vidéo.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>

    <!-- CONNECT TO JS -->
    <script src="src/assets/js/popup.js"></script>
</body>
</html>