<?php 




// lit les messages de la base de données, et les retourne au format JSON
function get_recette_json() {
    $data = file_get_contents("./data.json");
    return $data;
}

// lit les messages de la base de données, et les retourne au format liste PHP
function get_recette_liste($recette) {
    $messages_en_json = get_recette_json();
    $messages_decodes = json_decode($messages_en_json, true);
    $search_recette = array();
    if($recette != null ){
        for ($i=0; $i <sizeof($messages_decodes) ; $i++) {

            foreach ($messages_decodes[$i] as $key => $value2) {
                
                if( $key != "id" and stripos($value2, $recette) !== false ){
                 array_push($search_recette, $messages_decodes[$i]);
                 break;
             }
         }

     }
     return $search_recette;
 }

 return $messages_decodes;

}


//add_recettes(["titre" => "mou", "type" ])
function add_recettes($r){
    // function pour recupérer la liste des recettes de la base de données
    //Récupération des request
    $id=[md5(rand())];
    $titre = $r["titre"];
    $type = $r["type"];
    $categorie = $r["categorie"];
    $temps = $r["temps_preparation"];
    $nombre = $r["nombre_personnes"];
    $auteur = $r["nom_auteur"];
    $email = $r["email"];
    $instructions = $r["instructions"];
    $image = $r["photo"];
    $date = $r["date"];
    //decodage du json
    $data = json_decode(file_get_contents("./data.json"), true);
    //si tableau vide on le crée 
    if ($data== "") {
        $data= [];
    }

//on met les données
    array_push($data, [
        
        "titre" => $titre,
        "type" => $type,
        "categorie" => $categorie,
        "temps_preparation" => $temps,
        "nb_personnes" => $nombre,
        "auteur" => $auteur,
        "email" => $email,
        "recette" => $instructions,
        "date" => $date,
        "photo" => $image,
        "id" => $id
    ]);
    // On encode le nouveau contenu
    $nouveau_contenu = json_encode($data);
    // On enregistre ce nouveau contenu dans le fichier (on écrase le contenu précédent)
    file_put_contents("data.json", $nouveau_contenu);
}



//Fonction de suppréssion, cherche id dans mon tableau messagedecode et supprimme la recette pour element id
function del_recette($id){

    $messages_en_json = get_recette_json();
    $messages_decodes = json_decode($messages_en_json, true);
    $tab = array();

    for ($i=0; $i <sizeof($messages_decodes) ; $i++) {

        if ($messages_decodes[$i]["id"][0] != $id) {
            $tab[] = $messages_decodes[$i];
        }
    }

    file_put_contents("data.json", json_encode($tab));
}
?>