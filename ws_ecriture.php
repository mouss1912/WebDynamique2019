<?php 

include 'bddMouss.php';


if (sizeof($_REQUEST)!=0) {
add_recettes($_REQUEST);
	http_response_code(201);//crée
	echo 'ok';
}
else{
http_response_code(400);//"ok"
}

 ?>