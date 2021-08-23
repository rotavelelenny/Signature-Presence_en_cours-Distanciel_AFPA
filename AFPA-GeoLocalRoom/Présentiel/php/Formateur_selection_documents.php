<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Selection - Formateur - Choix du document</title>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="../assets/css/selection.css">
  <!-- ! Fait par Lenny Vazeille  -->
</head>

<body>
<!-- header -->
<?php include ("menu_afpa_presentiel.php");?>
  
    <div class="container_docs">

        <div class="document_btn">
            <button class="document">
              <a href="Formateur_Prestation_accompagnement.php">Document 1
              <br><p>Prestations d'accompagnement</p>
              </a>
        </div>

        <div class="document_btn">
            <button class="document">
            <a href="Formateur_Presence.php">Document 2
                <br><p>Présence en centre</p>
            </a>
        </div>

        <div class="document_btn">
            <button class="document">
            <a href="Formateur_Suivi_realisation.php">Document 3
              <br><p>Suivi de réalisation</p>
            </a>
        </div>

        <div class="all_document_btn">
            <button class="all_document">
            <a href="#">Tous les documents </a>
        </div> 

    </div>

<footer>
  <?php
    include 'Footer.php';
  ?> 
</footer>

</body>
</html>
