
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Stagiaire / Administration / Manager - Signature</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="../assets/css/signature_style.css" />
    <!-- ! Fait par Lenny Vazeille  -->
  </head>

<body>
  <!-- header -->
<?php include ("menu_afpa_presentiel.php");?>

<p class="note">Clique gauche. Maintenir pour signer. Relâcher le clic gauche pour terminer</p>

<div class="container_layout_All" >

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

</div> 

<script src="../js/script.js"></script>

<footer>
<?php
  include 'Footer.php';
?> 
</footer>


</body>
</html>
