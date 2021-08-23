<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/formateur_suivi_realisation_signature.css">
    <title>Document</title>
</head>




<body>
<!-- header -->
<!-- modifié par Lenny  -->
<?php include ("menu_afpa_presentiel.php");?>
  
    <div class="title">
        <h1>Suivi de réalisation en formation</h1>
    </div>
    <div class="container_layout2 success">
        <h3>Dans le cas où le/la stagiaire est Absent(e)
            Veuillez Inscrire le numéro de l'un des motifs suivants :</h3>
        <br>
        <p>01 - RETARD</p>
        <p>05 - ABSENCES LEGALES</p>
        <p>20 - ACCIDENT DU TRAVAIL SANS ARRÊT</p>
        <p>21 - ACCIDENT DU TRAVAIL AVEC ARRÊT</p>
        <p>30 - ACCIDENT DE TRAJET SANS ARRÊT</p>
        <p>31 - ACCIDENT DE TRAJET AVEC ARRÊT</p>
        <p>40 - ACCIDENT DE TRAVAIL HORS AFPA SANS ARRÊT</p>
        <p>41 - ACCIDENT DE TRAVAIL HORS AFPA AVEC ARRÊT</p>
        <p>97 - ABSENCE AUTORISÉE RÉMUNÉRÉE</p>
        <p>97 - ABSENCE AUTORISÉE NON RÉMUNÉRÉE</p>
        <p>99 - ABSENCE NON AUTORISÉE NON RÉMUNÉRÉE</p>

        <br>

        <div class="motif">
            <label for="motif">Motif de l'absence : </label> <input type="text">
        </div>
        <br>
        <label for="motif">Ajouter une pièce jointe : </label> <input type="file" name="pic">



    </div>


    <?php

    include "signature.php";

    ?>


    <footer>
        <?php

        include "Footer.php";

        ?>

    </footer>
</body>






</html>