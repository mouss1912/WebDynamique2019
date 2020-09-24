<?php

include "./bddMouss.php";

if(isset($_REQUEST["search"]))//Pour verifier si l'element du tableau n'est pas nul
{
 $messages = get_recette_liste($_REQUEST["search"]);//ici on décode
 http_response_code(200); // "OK"
 echo json_encode($messages);//on a besoin de reeencoder car on a besoin de manipuler le json en php

}
else
{
 $messages = get_recette_liste(null);//ici on décode
 http_response_code(200); // "OK"
 echo json_encode($messages);//on a besoin de reeencoder car on a besoin de manipuler le json en php
}


?>