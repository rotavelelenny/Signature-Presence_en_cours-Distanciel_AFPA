<?php
session_start();
include '../../config.php';
require_once SERVEUR_ROOT . ".././BACKEND/Includes/Class/Database.php";
?>


<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Selection - All - Choix de l'utilisateur</title>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="../assets/css/selection.css">
  <!-- ! Fait par Lenny Vazeille  -->
</head>

<body>

    <?php
    include ("menu_afpa_presentiel.php");
    ?>

    <div class="container_docs">

        <div class="document_btn">
            <button class="document">
              <a href="index_administration.php">ADMINISTRATION</a>
        </div>

        <div class="document_btn">
            <button class="document">
            <a href="index_manager.php">MANAGER</a>
        </div>

        <div class="document_btn">
            <button class="document">
            <a href="index_formateur.php">FORMATEUR</a>
        </div>
        
        <div class="document_btn">
            <button class="document">
            <a href="index_Stagiaire.php">STAGIAIRE</a>
        </div>

    </div>

<footer>
  <?php
    include ("Footer.php");
  ?> 
</footer>

</body>
</html>