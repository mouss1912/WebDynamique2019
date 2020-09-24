<?php 
session_start();
	include 'bddMouss.php';
	if (isset($_REQUEST['id']) and isset($_SESSION["connexion"])){
		del_recette($_REQUEST['id']);
		http_response_code(200);//crée
		echo json_encode(array("val" => true));	 
	}
	else{
		echo json_encode(array("val" => false));
		http_response_code(401);
	}
?>