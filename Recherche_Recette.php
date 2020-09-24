<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8"> 
  <html lang="fr">
  <title>Liste des recettes</title>

  <link rel="stylesheet" href="accueil2.css">
  <link rel="stylesheet" type="text/css" href="Recherche.css">
  <link rel="stylesheet" type="text/css" href="liste.css">

  

</head>
<body>
  <header>
    <h1><img src="https://www.univers-recette.com/wp-content/uploads/2017/12/logo-univers-recette-1.png" height=70> Recherche de recettes<img src="https://www.univers-recette.com/wp-content/uploads/2017/12/logo-univers-recette-1.png" height=70></h1>
</header>

<nav>
    <ul>
        <li><a href="Accueil.php">Accueil</a></li>
        <li><a href="Liste_Recette.php">Liste des recettes</a></li>
        <li><a href="Recherche_Recette.php">Recherche de recettes</a></li>
        <li><a href="Connexion.php"> Connexion</a></li>
        <!--     <li><a href="Ajout_Recette.php"> Ajout de recettes</a></li> -->
    </ul>
</nav>


<input class="favorite styled" id="afficher"
type="button"
value="Afficher recettes">
<center>
 <input id="ma_recette" type="text"  placeholder="rechercher une recette">
</center>
<div id="Liste_Recette"></div>


<!-- Partie du formulaire de recherche -->
<div class = "content" >
   <div class = "centerwrapper">

       <form action="Liste_Recette.php" method="POST" id="formu">

        <h1><b>Ajoutez une recette<b></h1></br>
         <p>Titre de la recette</p> <!--pour faire des boutons radio-->
         <input type="text" required placeholder="saisisser votre titre" name="titre" placeholder="titre de votre recette">


         <p>Type de recette</p>   <!--pour faire une liste déroulante-->

         <div >
            <input type="radio" id="plat" name="type" required value="plat" 
            checked> <!--le name recette doit etre pareil pour tous les éléments de la liste-->
            <label for="plat">plat</label>
            <input type="radio" id="entrée" name="type" value="entrée">
            <label for="entrée">entrée</label> <!--le label on s'en gou un peu, mais le for permet d'affilier un id à un label, pour quand on clique sur l'éléme,nt, le bouton soit sélectionné-->
            <input type="radio" id="dessert" name="type" value="dessert">
            <label for="dessert">dessert</label>
        </div>

        

        <label for=" Categorie_recette">Catégorie de recette:</label>

        <select id="type de recette" required name="categorie">
            <option value="">--Veuillez choisir une option--</option>
            <option value="Cuisine français">Cuisine française</option>  <!--ici la value pas trop importante, car c'est ce que reçoit le serveur-->
            <option value="Cuisine senegalaise">Cuisine senegalaise</option>
            <option value="Cuisine guinéenne">Cuisine guinéenne</option>
            <option value="Cuisine burkinabé">Cuisine burkinabé</option>
            
        </select>

        <p>Temps de préparation en minutes</p>

        <div>
            <input type ="number" id="temps prepa" name="temps_preparation" required min="5">
            
        </div> 

        
        <p>Nombre de personnes pour la recette</p>
        <div>
            <input type ="number" id="nombre" name="nombre_personnes" required min="1" max="20">
            
            
        </div> 

        <p>Nom de l'auteur</p>

        <div>
            <input type="text" required id="auteur" name="nom_auteur" placeholder="votre nom">
        </div> 

        <p>Courriel</p>

        <div>
            <input type="email"  required placeholder="email" id="mail" name="email" >
            
        </div>

        <p>Instructions pour effectuer la recette</p>

        <div>
            <input type="text" id="instructions" name="instructions" placeholder="instruction cuisine">
        </div> 

        <p>Photo</p>

        <div>
            <input type="url"
            id="image" name="photo" placeholder="saisir url" 
            >
        </div> 

        
        <p>date d'ajout</p>

        <div>
            <input type="date" required id="start" name="date"

            min="2019-12-11" max="2022-12-31">
            
        </div> 

        <div>
            <input type="submit" name="submit"  id="submit">
            
        </div>

    </form>
</div>
</div>



<script type="text/javascript" src="Service_client.js" ></script>


<footer>
    <p>© 2019 Djens, Odin, Mouss</p>

    <SCRIPT>
        document.write("Cette page a été modifiée le : " + document.lastModified);
    </SCRIPT>
    
</footer>

</body>
</html>