<?php 
session_start();

function authentification($username, $mdp){
    // emplacement fichier json
   	// on le décode le json pour pouvoir récupérer son contenu()
    $contenu = json_decode(file_get_contents("./connnexion.json"), true); 

    $match = false;

    foreach ($contenu as $user) {
        if ($user["username"] == $username && $user["password"] == $mdp) {
        	$match = true;
        	$_SESSION["connexion"] = true;
        	$_SESSION["username"] = $username;
        	echo json_encode(array('connexion' => true));
        	//header("Location: Connexion.php");
        	http_response_code(200);
        	return;
        	break;
        }
    }
    echo json_encode(array('connexion' => false));
    http_response_code(401);
}

if (isset($_REQUEST["username"]) && isset($_REQUEST["password"])){
	$username = $_REQUEST["username"];
    $pwd = $_REQUEST["password"];
    authentification($username, $pwd);
}

?>

