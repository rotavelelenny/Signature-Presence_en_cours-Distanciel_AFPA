<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/Administration_Manager_recap.css">
<!-- fait par David Shlimon -->
    <title>Document</title>
</head>

<body>
<!-- header -->
<!-- modifié par lenny -->
<?php include ("menu_afpa_presentiel.php");?>

    <hr>
    </hr>
    <h1>Suivi de réalisation en formation</h1>
    <hr>
    </hr>

    <p style="padding-top:40px; color:grey; font-size:1rem;text-align:center;">Récapitulatif des suivie de réalisations en formation bimodale hebdomadaire - date sélectionnée précédemment</p>
    <br>
    <form action="" method="POST">



        <table>

            <tr>

                <th rowspan="2">
                    Stagiaire
                </th>

                <th colspan="2">
                    1/2 Journée</th>


                <th rowspan="2">
                    Absence (+Motif)

                </th>
                <th rowspan="2">

                    Formateur</th>
            </tr>

            <tr>

                <th>M</th>
                <th>A-M</th>

            </tr>

            <tr>

                <td>paul</td>
                <td>X</td>
                <td>/</td>
                <td>présent</td>
                <td>Yannis</td>



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