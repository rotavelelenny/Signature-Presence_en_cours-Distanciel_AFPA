<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/Administration_Manager_recap.css">
<!-- fait par david Shlimon -->
    <title>Document</title>
</head>

<body>
<!-- header -->
<!-- modifié par Lenny -->
<?php include ("menu_afpa_presentiel.php");?>

    <hr>
    </hr>
    <h1>Prestations d'accompagnement</h1>
    <hr>
    </hr>

    <p style="padding-top:40px; color:grey; font-size:1rem;text-align:center;">Récapitulatif des prestations d'accompagnements réalisées pour la formation - date sélectionnée précédemment</p>
    <br>
    <form action="" method="POST">
        <table>

            <tr>

                <th>
                    Stagiaire
                </th>
                <th>
                    Activité
                </th>
                <th>
                    Nombres d'heures
                </th>
                <th>
                    Formateur
                </th>

            </tr>
        </table>
        <br>
        <div class="submit_btn">
            <input class="submit" type="submit" name="submit" value="SUIVANT">
        </div>
        </div>
        <footer>
            <?php
            include "Footer.php";
            ?>

        </footer>
</body>

</html>