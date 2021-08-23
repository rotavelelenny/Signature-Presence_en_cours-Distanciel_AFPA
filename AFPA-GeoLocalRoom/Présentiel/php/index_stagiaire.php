
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Stagiaire - rôle et localisation - étape 1</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="../assets/css/identity.css" />
    <!-- ! Fait par Lenny Vazeille  -->
</head>

<body>
<!-- header -->
<?php include ("menu_afpa_presentiel.php");?>


<p class="explain">Veuillez renseigner : Votre identité</p>

    <main class="container_selecteur">
        <div class="bloc_fils gauche">
            <p>&Eacute;tablissement</p>
            
            <form method="post" action="All_signature.php">
                <select class="selecteur" name="eshtablishment" id="eshtablishment">
                    <option value="0">Sélectionnez --</option>
                    <option class="change_select" value="1">La Treille</option>
                    <option class="change_select" value="2">Saint Jerôme</option>
                    <option class="change_select" value="3">Pointe Rouge</option>
                    <option class="change_select" value="4">Tous</option>
                </select>
                <!-- <input type="submit" value="Valider">  -->
            </form>
        </div>
        
        <div class="bloc_fils droite">
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
        
        <input class="submit" type="submit" name="submit" value="VALIDER">
       
    </main>


  <?php
    include 'Footer.php';
  ?> 
</footer>

</body>
</html>