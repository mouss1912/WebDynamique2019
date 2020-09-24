    
<html>
<head>
  <meta charset="UTF-8"> 
  <html lang="fr">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <style>
    .mySlides {display:none}
    .w3-left, .w3-right, .w3-badge {cursor:pointer}
    .w3-badge {height:13px;width:13px;padding:0}
  </style>
  <title>
    Marmite aux mille délices
  </title>

  <link rel="stylesheet" href="accueil.css">
  <link rel="stylesheet" href="accueil2.css">
  <script type="text/javascript" src="defil.js"></script>

</head>
<body>
  <!--header avec les consignes-->
  <header>
    <h1><img src="https://www.univers-recette.com/wp-content/uploads/2017/12/logo-univers-recette-1.png" height=70> Marmite aux mille délices<img src="https://www.univers-recette.com/wp-content/uploads/2017/12/logo-univers-recette-1.png" height=70></h1>

  </header>

  <!--Menu-->
  <nav>
    <ul>
      <li><a href="Accueil.php">Accueil</a></li>
      <li><a href="Liste_Recette.php">Liste des recettes</a></li>
      <li><a href="Recherche_Recette.php">Recherche de recettes</a></li>
      <li><a href="Connexion.php"> Connexion</a></li>
    <!--             <li><a href="Ajout_Recette.php"> Ajout de recettes</a></li>
    -->
  </ul>
</nav>
<!--Centre de la page-->

<section>
  <center>
    <h2>Cette application consiste à gérer des recettes de cuisine, elle vous permettra d'ajouter une recette, de visualiser et supprimer des recettes !</h2>
  <!--   <p>Cette application consite à gérer des recettes de cuisine, elle vous permettra d'ajouter 
        une recette, d'apprendre d'autres recettes et voilà
      </p> -->
    </center>
  </section>


  <!-- Partie de défilement de la page d'accueil -->
  <div class="w3-container">
    
    <!-- <p>An example of using buttons to indicate how many slides there are in the slideshow, and which slide the user is currently viewing.</p> -->
  </div>

  <div class="w3-content w3-display-container" style="max-width:800px">
   <img class="mySlides" src="https://i.f1g.fr/media/madame/orig/sites/default/files/img/2018/06/bmk-paris-bamako.jpg" style="width:100%" style="height: 50%">

   <img class="mySlides" src="https://cdn.yeclo.com/wp-content/uploads/2019/12/l’Attiéké-Poisson-Tour.jpg" style="width:100%" style="height: 10%">

   <img class="mySlides" src="https://api.bridelice.fr/storage/images/recipe/salade_de_fruits_au_miel_et_speuculoos_n55_vague3_0_2304x720.jpg" style="width:100%" style="height: 10%">

   <!--  <img class="mySlides" src="http://untitledmag.fr/wp-content/uploads/2016/04/Plats-FoodChéri-2.jpg" style="width:100%" style="height: 10%"> -->
   

   <!--  <img class="mySlides" src="https://static.cuisineaz.com/680x357/https://static.cuisineaz.com/400x320/i2842-poire-belle-helene-pochee.jpg" style="width:100%" style="height: 10%"> -->
   <!--  <img class="mySlides" src="img_mountains_wide.jpg" style="width:100%"> -->
   <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%" style="height:100%">
    <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
    <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
  </div>
</div>

<script>
  var slideIndex = 1;
  showDivs(slideIndex);

  function plusDivs(n) {
    showDivs(slideIndex += n);
  }

  function currentDiv(n) {
    showDivs(slideIndex = n);
  }

  function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("demo");
    if (n > x.length) {slideIndex = 1}
      if (n < 1) {slideIndex = x.length}
        for (i = 0; i < x.length; i++) {
          x[i].style.display = "none";  
        }
        for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" w3-white", "");
        }
        x[slideIndex-1].style.display = "block";  
        dots[slideIndex-1].className += " w3-white";
      }
    </script>


    <!--pied de page-->


    <footer>
      <p>© 2019 Djens, Odin, Mouss</p>

      <SCRIPT>
        document.write("Cette page a été modifiée le : " + document.lastModified)
      </SCRIPT>

    </footer> 


  </body>
  </html>