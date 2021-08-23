<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Manager - Formation, rôle et nom - étape 2</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="../assets/css/identity.css" />
    <!-- ! Fait par Lenny Vazeille  -->
</head>

<body>
<!-- header -->
<?php include ("menu_afpa_presentiel.php");?>

<p class="explain">Veuillez renseigner : L'identité de la personne ou du groupe pour qui vous allez effectuer une opération.</p>


    <main class="container_selecteur">
        <div class="bloc_fils gauche">
            <p>Formation</p>
            
            <form method="post" action="All_signature.php">
                <select class="selecteur" name="Acronym" id="Acronym">
                    <option value="0">Sélectionnez --</option>
                    <option class="change_select" value="1">DWWM</option>
                    <option class="change_select" value="2">ADVF</option>
                    <option class="change_select" value="3">CR</option>
                    <option class="change_select" value="4">Toutes</option>
                </select>
                <!-- <input type="submit" value="Valider">  -->
            </form>
        </div>

        <div class="bloc_fils center">
        <p>Rôle</p>
            <form method="post" action="All_signature.php">
                <select class="selecteur" name="accreditation" id="accreditation">
                    <option value="0">Sélectionnez --</option>
                    <option value="1">Administration</option>
                    <option value="2">Manager</Form></option>
                    <option value="3">Formateur</option>
                    <option value="4">Stagiaire</option>
                </select>
            <!-- <input type="submit" value="Valider">  -->
            </form>

        </div>

        <div class="bloc_fils droite">
        
        <p>Nom</p>
            
            <form method="post" action="All_signature.php">
                <select class="selecteur" name="user" id="user">
                    <option value="0">Sélectionnez --</option>
                    <option class="change_select" value="1">John Doe</option>
                    <option class="change_select" value="2">Lenny Vazeille</option>
                    <option class="change_select" value="3">Nassim Snacel</option>
                    <option class="change_select" value="4">David Shlimon</option>
                    <option class="change_select" value="5">Morgan Levetti</option>
                    <option class="change_select" value="6">Salim Seksaoui</option>
                    <option class="change_select" value="6">Tous</option>
                </select>
                <!-- <input type="submit" value="Valider">  -->
            </form>
        </div>
        
        <input class="submit" type="submit" name="submit" value="VALIDER">
    </main>


<?php
    include 'Footer.php';
?> 
</footer>

</body>
</html>