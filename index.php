<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Adopte un LOUNGE</title>
    <link rel="stylesheet" href="library/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    
    <script src="library/jquery/jquery-3.6.0.min.js"></script>
    <script src="library/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <script src="library/ddslick/ddslick.js"></script>
    <script src="js/main.js"></script>
</head>

<header>
    <div class="container_header">
        <div class="left">
            <img src="img/natixis_logo.png" alt="natixis_logo" >
        </div>
        <div class="center">
            <span class="titre_page">Adopte un</span><br>
            <span class="titre_page_gras">LOUNGE</span>
        </div>
        <div class="right">
        </div>
    </div>
</header>

<body>
    <div class="container" id="new_event" data-event="1">
        
        <div class="row">
            <div class="col-12 error_message">
                <div id="error"></div>
            </div>
        </div>

        <div class="row row_sous_titre">
            <div class="col-12 col-sm-5 col-md-4 col-lg-3 col-xl-2">
                <span class="sous_titre">Nouvel évènement</span>
            </div>
            <div class="col-12 col-sm-7 col-md-8 col-lg-9 col-xl-10">
                <hr>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="accordion" id="accordionPanelsStayOpenExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="true" aria-controls="panelsStayOpen-collapseTwo">
                                Disponibilité des lounges
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseTwo" class="accordion show" aria-labelledby="panelsStayOpen-headingTwo">
                            <div class="accordion-body first-accordion-body">
                                <div class="row">
                                    <div class="col-12 col-sm-6 first-accordion-content">
                                        <div class="row">
                                            <div class="col-12">
                                                <label for="date_event">Date*</label>
                                                <input type="date" class="form-control" id="date_event" name="date_event" min="<?=date('Y-m-d')?>">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <label for="heure_event">Heure*</label>
                                                <input type="time" class="form-control" id="heure_event" name="heure_event">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 lounge" >
                                        <div class="lounge_active">
                                            <input type="radio" value="4" id="lounge_4" name="choix_lounge" checked>
                                            <label for="lounge_4">Lounge du 4e étage</label>
                                        </div>
                                        <div class="lougne_active">
                                            <input type="radio" value="5" id="lounge_5" name="choix_lounge">
                                            <label for="lounge_5">Lounge du 5e étage</label>
                                        </div>
                                        <div class="lounge_inactive">
                                            <input type="radio" value="6" id="lounge_6" name="choix_lounge" disabled>
                                            <label for="lounge_6">Lounge du 6e étage</label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                Informations<br>
                                pour identifier votre événement
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                            <div class="accordion-body">
                                <div class="row">
                                    <div class="col-12 col-sm-6 col-lg-4">
                                        <div class="row">
                                            <div class="col-12">
                                                <div id="type_event"></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <label for="nom_event">Nom de votre événement*</label>
                                                <input type="text" class="form-control" name="nom_event" id="nom_event">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <label>Nombre de participants*</label>
                                                <input type="number" class="form-control" name="nb_participant" id="nb_participant" list="liste_nb_participant" min="1" max="10">
                                                <datalist id="liste_nb_participant">
                                                    <?php
                                                        for($i=1;$i<=10;$i++){?>
                                                                <option value="<?=$i?>">
                                                                    <?=$i?>
                                                                </option>
                                                            <?php
                                                        }
                                                    ?>
                                                </datalist>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-4">
                                        <div class="row">
                                            <div class="col-12">
                                                <label for="description_event">Description*</label>
                                                <textarea class="form-control" name="description_event" id="description_event" height="100%"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-lg-4">
                                        <div class="row">
                                            <div class="col-12">
                                                <label for="nom_organisateur">Votre nom*</label>
                                                <input type="text" class="form-control" name="nom_organisateur" id="nom_organisateur">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <label for="prenom_organisateur">Votre prénom*</label>
                                                <input type="text" class="form-control" name="prenom_organisateur" id="prenom_organisateur">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <label for="direction_organisateur">Votre direction*</label>
                                                <select class="form-select" id="direction_organisateur" aria-label="Default select example">
                                                    <?php 
                                                        for($i=1;$i<=2;$i++){ ?>
                                                            <option value="<?=$i?>" selected>Option <?=$i?></option><?php
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <button class="btn btn-success" id="sauvegarder">Sauvegarder</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="library/bootstrap/js/bootstrap.js"></script>

</body>

<footer>
        <div id="natixis_logo_bas" >
            <img src="img/natixis_logo_bas.png" alt="natixis_logo_bas">
        </div>
</footer>

</html>
