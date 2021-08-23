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
  <title>Prestation d'accompagnement</title>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="../assets/css/Prestation_style.css">
  <link rel="stylesheet" href="../assets/css/signature_style.css" />
  <!-- ! Fait par Lenny Vazeille  -->
</head>

<body>
<!-- header -->
  <?php include ("menu_afpa_presentiel.php");?>
  
  <div class="title">
        <h1>Prestation d'accompagnement</h1>
    </div>
  <main role="main">

    <div class="container_parent_left">

      <div class="container left">CALENDAR
      <input type="date" id="start" name="trip-start"
       value="2018-07-22"
       min="2018-01-01" max="2018-12-31">
      </div>

      <div class="container center_left">ACTIVITE
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum maiores ipsa voluptatibus incidunt. Quas obcaecati dolores tenetur blanditiis ea, voluptate aliquam beatae pariatur, earum error alias quod consectetur veniam delectus.
      Dolor ea ipsa totam, illo repudiandae nesciunt reiciendis quod fugiat, dicta adipisci eius? Sit exercitationem, tempora ullam rerum similique nemo, magnam, dolores excepturi quidem quae vitae reiciendis minima eligendi sed!
      Fuga aut tempore, excepturi delectus dolores veniam praesentium dicta enim laboriosam natus voluptas obcaecati dolorum, est fugiat explicabo deleniti saepe. Eligendi, quod facilis? Tempora autem libero velit, porro rem odio!
      </div>

      <div class="container center_right">NOMBRES D'HEURES
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum maiores ipsa voluptatibus incidunt. Quas obcaecati dolores tenetur blanditiis ea, voluptate aliquam beatae pariatur, earum error alias quod consectetur veniam delectus.
      Dolor ea ipsa totam, illo repudiandae nesciunt reiciendis quod fugiat, dicta adipisci eius? Sit exercitationem, tempora ullam rerum similique nemo, magnam, dolores excepturi quidem quae vitae reiciendis minima eligendi sed!
      Fuga aut tempore, excepturi delectus dolores veniam praesentium dicta enim laboriosam natus voluptas obcaecati dolorum, est fugiat explicabo deleniti saepe. Eligendi, quod facilis? Tempora autem libero velit, porro rem odio!
      </div>

    </div>
    
    <div class="container_parent_right">
      
      <p class="utilisation_canvas">Clique gauche.<br> Maintenir pour signer. <br>Relâcher le clic gauche pour terminer</p>
      <div class="layout">
        <h2>1 - Signature</h2>              
        <canvas id="canvas" name="signatures"></canvas> 
        <span id="bt-clear">
            <p> &#40; Effacer &#41; </p>
        </span>
      </div>

      <div class="layout">
        <h2>2 - Confirmation</h2>
      <div id="capture" name="signatures"></div>  
          
      <div class="submit_btn">
        <input class="submit" type="submit" name="submit" value="VALIDER">
      </div>
      
    </div> 
  
  </main>  
    
  <div class="documentation">
  
    <?php include ("Piece_jointe.php");?>   

    <a class="download_a file_right" href="../assets/Documents/Justificatif_des_prestations_accompagnement_AFPA.pdf" download="Justificatif_des_prestations_accompagnement_AFPA">
      
      <p>Remplir le document au format papier</p>
      <p2>Cliquez sur l'image</p2>
      <img src="../assets/image/Download_pdf.png" alt="PDFpng dans forme logo afpa vert">
   
    </a>
    
  </div>

  <footer>
    <?php include ("Footer.php");?>   
  </footer>

<script src="../js/script.js"></script>
</body>
</html>
