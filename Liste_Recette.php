<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8"> 
  <html lang="fr">
  <title>Liste des recettes</title>
  <link rel="stylesheet" href="accueil2.css">
  <link rel="stylesheet" href="liste.css">
</head>
<body>
  <header>
    <h1><img src="https://www.univers-recette.com/wp-content/uploads/2017/12/logo-univers-recette-1.png" height=70> Liste des recettes<img src="https://www.univers-recette.com/wp-content/uploads/2017/12/logo-univers-recette-1.png" height=70></h1>
</header>

<nav>
    <ul>
        <li><a href="Accueil.php">Accueil</a></li>
        <li><a href="Liste_Recette.php">Liste des recettes</a></li>
        <li><a href="Recherche_Recette.php">Recherche de recettes</a></li>
        <li><a href="Connexion.php"> Connexion</a></li>
        <!--                 <li><a href="Ajout_Recette.php"> Ajout de recettes</a></li> -->

    </ul>
</nav>





<?php 

include 'bddMouss.php';

$data = file_get_contents("./data.json");
$messages_decodes = json_decode($data, true);

//var_dump($messages_decodes[0]);
echo '<div class="content">'; 
echo '<div class="centerwrapper">'; 

echo '<h1> Liste des récettes de Marmites au milles Délices</h1>'; 

for ($i = 0; $i < sizeof($messages_decodes) ; $i++) {
    echo '<div id="recette">';  
    
    foreach ($messages_decodes[$i] as $key => $value) {
        
        if ($key == 'photo'){
            echo  ' <div id = "img_cont" >
            <img src="'.$value.'"/>  </div> <br/>';
        }
        elseif ($key != 'id') {
            if ($key == 'titre') {
                echo '<h2> '/* $key. " ' : '"*/ .$value.'</h2>';  
            } else {
                echo '<p> <b> '.ucwords(str_replace("_", " ", $key)). '</b>  : ' .$value .'</p>';
            }
        }
    }

    echo '</div><br/>';
}

echo '</div>'; 
echo '</div>'; 
?>
<footer>
    <p>© 2019 Djens, Odin, Mouss</p>

    <SCRIPT>
        document.write("Cette page a été modifiée le : " + document.lastModified)
    </SCRIPT>
    
</footer>


</body>
</html>