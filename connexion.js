document.addEventListener('DOMContentLoaded', function() {
	
  var connexion = document.querySelector('#form-connexion');

  connexion.addEventListener('submit', function(event) {
  	event.preventDefault();
    //var connexionInfos = new FormData(connexion);
    var requete = new XMLHttpRequest();
    input_log = document.querySelector('input[name="username"]');
    input_mdp = document.querySelector('input[name="mdp"]');
    console.log("input_mdp.value");
    console.log(input_mdp.value);

    requete.addEventListener('load', function(data) {
    	var ret = JSON.parse(data.target.responseText);
    	console.log(ret["connexion"]);
    	p = document.querySelector('#text_error');
    	if(ret["connexion"]){
    		window.location.href = "Connexion.php";
    		p.innerHTML = "";
    	}
    	else{
    		p.innerHTML = "Erreur de mot de passe ou login";
    	}
    });

    requete.open('GET', './ws_connexion.php?username='+input_log.value+'&password='+input_mdp.value);
    requete.send();
  });

  var deconnexion = document.querySelector('#btn_deconnexion');
  deconnexion.addEventListener('click', function(event) {
    var requete = new XMLHttpRequest();
    requete.addEventListener('load', function(data) {
      window.location.href = "Connexion.php";
    });
    requete.open('GET', './ws_deconnexion.php');
    requete.send();
  });
  
});