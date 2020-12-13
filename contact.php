<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/style_contact.css" type="text/css">
    <meta charset="UTF-8">
    <title>Speedy-Pinky</title>
  </head>
  <body>
  <div class="hautFixe">
    </div>
  <div class="ecran">
 <?php
  include("_nav.php");
 ?>

 <h1 id="contact">Contactez-moi !</h1>

   <div align="center">

    <h2> Plus d'informations ou questions ? </h2>

    <p> Laissez-moi vos impressions ou interrogations , je vous repondrais entre 2 crocs de Pac-Man ! </p><br><br>

    <h2> MERCI ! </h2>

  <form method="post" action="cible.php" id="form1">

    <p><label for="Nom"> Ton Nom : </label><input type="text" name="Nom" id="Nom" size="15"></p>

    <p><label for="Prenom"> Ton Prénom : </label><input type="text" name="Prenom" id="Prenom" size="15"></p>

    <p><label for="emailadress"> E-Mail ! </label><input type="text" name="emailadress" id="emailadress" size="27" placeholder="@"></p>

    <p>
        <label for="mail"> <h2> Your Message :</h2> </label> <br/>
        <textarea name="sendmail" id="mail" rows="15" cols="55">
        </textarea>
    </p>

      <input type="submit" class = "panneau " placeholder = "Envoyer" value="Envoyer" />


  </form>

 </div>
</div>
<?php
include("_footer.php");
?>
</body>
</html>
