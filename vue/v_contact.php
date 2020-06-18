<!DOCTYPE html>
<html>
    <head>
<meta charset="utf-8">
<link rel="stylesheet" href="css/sta.css">
<title>Contact</title>
    </head>

    <body>
    <div class="logo"><img src="image/IMG_3264.JPG"></div>

  <div class ="menu">
  <ul><a id="nav" href="indexSTAGE.php"><h3>Accueil</h3>
   <a id="nav" href="indexSTAGE.php?uc=controleur&action=tarif"><h3>Tarif/Horaire</h3>
   <a id="nav" href="indexSTAGE.php?uc=controleur&action=contact"><h3>Nous Contacter</h3>
   </a></ul>
   </div>
<center>
   <div class="alignement_body">
     <div class="titre"><h1>Nous Contacter</h1></div>
     
     <h3>Nos coordonnées</h3>
     Tél: 01.77.76.97.33<br>
     mail: briveae@gmail.com
     <br><br><h3>Où nous trouver?</h3>
25 Rue du Dr Fleming, Aulnay-Sous-Bois, 93600
<br><br>
      <h3>Nous Contacter</h3>
     <form action="modele/mail.php" method="post">
        <label for="firstname">*Prénom :</label><br>
        <input type="text" name="firstname" id="firstname" required/><br><br>
        <label for="lastname">Nom :</label><br>
        <input type="text" name="lastname" id="lastname"/><br><br>
        <label for="email">*Adresse mail:</label><br>
        <input type="text" name="email" id="email" required/><br><br>
        <label for="subject">*Objet du message :</label><br>
        <input type="text" name="subject" required/><br><br>
        <label for="message">*Votre message :</label><br>
        <textarea name="message" id="message" required>
        </textarea><br><br>
        <input type="submit" name="sendMail" value="Envoyer"/>
    </form>
<br>
  </div>
</center>
  </body>
  </html>