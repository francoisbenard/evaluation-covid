<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Tous AntiCODID</title>

    <?php wp_head() ?>
</head>

<body>
    <header>
        <div class="container">
            <div class="row align-items-center bloc-header">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="/index.php">
                            <img class="logo-republique" src="<?php echo get_template_directory_uri(); ?>/img/Republique-francaise-logo.png" alt="" />
                            <img class="logo-covid2" src="<?php echo get_template_directory_uri(); ?>/img/Logo_TousAntiCovid.svg.png" alt="" />
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse text-center" id="navbarNavAltMarkup">
                            <div class="navbar-nav">

                                <a class="nav-link me-2" href="/index.php/campagne/">Campagne de vaccination</a>
                                <a class="nav-link me-2" href="/index.php/strategie/">Stratégie vaccinale</a>
                                <a class="nav-link me-2" href="/index.php/souhait/">Déclarer mon souhait de me faire vacciner</a>
                                <!-- <a class="nav-link me-2" aria-current="page" href="#">Lutter contre l'épidémie</a> -->
                                <a class="nav-link me-2" href="/index.php/vie/">Vie privée</a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <img class="logo-covid" src="<?php echo get_template_directory_uri(); ?>/img/Logo_TousAntiCovid.svg.png" alt="" />
                    </div>
                </nav>
                <!-- <div class="bgc  text-center"> -->
                <img class="bandeau-vaccine mx-auto" src="<?php echo get_template_directory_uri(); ?>/img/bandeau-vaccine.png" alt="" />
                <!-- </div> -->
            </div>
        </div>
    </header>