<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8"> 
  <html lang="fr">
  <title>
   Authentification
 </title>
 <link rel="stylesheet" type="text/css" href="connexion.css">
 <link rel="stylesheet" href="accueil.css">
 <!--      <script type ="text/javascript" src="accueil.js"></script> -->
</head>
<body>
  <!--header avec les consignes-->
  <header>
    <h1><img src="https://www.univers-recette.com/wp-content/uploads/2017/12/logo-univers-recette-1.png" height=70> Authentification<img src="https://www.univers-recette.com/wp-content/uploads/2017/12/logo-univers-recette-1.png" height=70></h1>

  </header>
  
  <!--Menu-->
  <nav>
    <ul>
      <li><a href="Accueil.php">Accueil</a></li>
      <li><a href="Liste_Recette.php">Liste des recettes</a></li>
      <li><a href="Recherche_Recette.php">Recherche de recettes</a></li>
      <li><a href="Connexion.php"> Connexion</a></li>
      <!--      <li><a href="Ajout_Recette.php"> Ajout de recettes</a></li> -->

    </ul>
  </nav>
  <!--  <link rel="stylesheet" href="Connexion.css"> -->

  <div class="login">
   <center>	
    <h1>Login</h1>
    <form id="form-connexion" action="" method="GET">
      <input type="text" name="username" placeholder="Username" required="required" />
      <input type="password" name="mdp" placeholder="Password" required="required" />
      <button type="submit" class="btn btn-primary btn-block btn-large">Connexion</button>
      <p id="text_error"></p>
    </form>
  </center>
</div>





<?php

if(isset($_SESSION["connexion"]) and $_SESSION["connexion"]){
  echo '<div class="row"><div class="col text-center">
  <h1> Vous êtes  connect&eacute(e) en tant que ' . $_SESSION["username"].'</h1>
  <p class="h6"><small> <a href="/projet/projetsa/Accueil.php">Retour</a></small></p>
  <input id="btn_deconnexion" type="button" value="Deconnexion"/>
  </div>
  </div>';
}
?>

<footer>
  <p>© 2019 Djens, Odin, Mouss</p>
  <script type="text/javascript" src="connexion.js"></script>

  <script type="text/javascript">
    document.write("Cette page a été modifiée le : " + document.lastModified);
  </script>
  
</body>
</html>