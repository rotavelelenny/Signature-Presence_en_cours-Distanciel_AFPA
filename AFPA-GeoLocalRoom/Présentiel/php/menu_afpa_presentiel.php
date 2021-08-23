<?php if(!isset($_SESSION)){ session_start(); } ?>
<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="http://www.cssscript.com/wp-includes/css/sticky.css">
    <link rel="stylesheet" href="../assets/css/menu_afpa_presentiel_update.css">
</head>

<body>
    <header>
        <div class="logo">
            <img class="imglogo" src="../assets/image/LogoAfpa.jfif" alt="">  
        </div>
        <nav class="menu">
            <ol>
                <li class="menu-item"><a href="../../Accueil.php"><i class="fa fa-home"></i>Accueil</a></li>
                <!-- <li class="menu-item"><a href="#"><i class="fa fa-thumb-tack"></i>Document&#9660;</a>
                    <ol class="sub-menu">
                        <li class="menu-item"><a href="./1.PHP">1</a></li>
                        <li class="menu-item"><a href="./2.php">2</a></li>
                        <li class="menu-item"><a href="./3.php">3</a></li>
                    </ol>
                </li> -->
                <li class="menu-item"><a href="#"><i class="fa fa-gears"></i>Services&#9660;</a>
                    <ol class="sub-menu">
                        <li class="menu-item"><a href="https://metis.afpa.fr/" target="_blank">Metis</a></li>
                        <li class="menu-item"><a href="https://ceres.emploi.gouv.fr/" target="_blank">Ceres</a></li>
                        <li class="menu-item"><a href="https://valce.travail.gouv.fr/" target="_blank">Habilitation Jury</a></li>
                        <li class="menu-item"><a href="https://www.francecompetences.fr/recherche_certificationprofessionnelle/" target="_blank">RNCP</a></li>
                        <li class="menu-item"><a href="https://travail-emploi.gouv.fr/" target="_blank">RNCP</a></li>
                        <li class="menu-item"><a href="https://travail-emploi.gouv.fr/formation-professionnelle/certification-competences-pro/titres-professionnels-373014" target="_blank">Titre Pro</a></li>
                        <li class="menu-item"><a href="https://www.enquetes.afpa.fr" target="_blank">Enquete Satisfaction</a></li>
                        <li class="menu-item"><a href="https://www.jurytitreprofessionnel.fr/" target="_blank">Portail Jury</a></li>
                        <li class="menu-item"><a href="http://13010vmprt01/printers/" target="_blank">Imprimante St Jérôme</a></li>
                        <li class="menu-item"><a href="http://13012vmprt01/printers/" target="_blank">Imprimante La Treille</a></li>
                        <li class=" menu-item"><a href="../../Aide.php">Aide</a></li>
                        <li class="menu-item"><a href="../../Services.php">Info</a></li>
                    </ol>
                </li>
                <li class="menu-item"><a href="#"><i class="fa fa-picture-o"></i>Plan&#9660;</a>
                    <ol class="sub-menu">
                        <li class="menu-item"><a href="../../Afpa_Saint-Jérôme.php">Afpa Saint-Jérôme</a></li>
                        <li class="menu-item"><a href="../../Afpa_Pointe_Rouge.php">Afpa Pointe Rouge</a></li>
                        <li class="menu-item"><a href="../../Afpa_La_treille.php">Afpa La Treille</a></li>
                    </ol>
                </li>
                <li class="menu-item"><a href="#"><i class="fa fa-user deroulant"></i>Compte&#9660;</a>
                    <ol class="sub-menu">
                        <li class="menu-item"><a href="../../Compte_Admin.php">Admin</a></li>
                        <li class="menu-item"><a href="../../Compte_Manager.php">Manager</a></li>
                        <li class="menu-item"><a href="../../Compte_Formateur.php">Formateur</a></li>
                        <li class="menu-item"><a href="../../Compte_Tuteur.php">Tuteur</a></li>
                        <li class="menu-item"><a href="../../Compte_Jury.php">Jury</a></li>
                        <li class="menu-item"><a href="../../Compte_Stagiaire.php">Stagiaire</a></li>
                    </ol>
                </li>
                <li class="menu-item"><a href="../../Contact.php"><i class="fa fa-phone"></i>Contact</a></li>
                <li class="menu-item"><a href="../../Déconnection.php"><i class="fas fa-door-open"></i>Déconnexion</a></li>
            </ol>
        </nav>
    </header>

    <script src="../js/menu_afpa.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

</body>

</html>