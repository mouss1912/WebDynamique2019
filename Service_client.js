function affiche_dynamique() {
    fg = document.querySelector('#ma_recette');

    var request = new XMLHttpRequest(); //c'est lui qui offre open et send, c'est lui qui crée l'objet ajax
    request.addEventListener('load', function(data) { // le data c'est le reultat quand on open le web service
        var ret = JSON.parse(data.target.responseText); //decoder la base de données
        
        var new_html = '';
        new_html +='<div class="content">';
        new_html+= '<div class="centerwrapper">' ;
        new_html+='<h1> Liste des récettes de Marmites au milles Délices </h1> ';
        //Affichage des clés valeurs du json  
        for (var i = 0; i < ret.length; i++) {
            new_html+='<div id="recette">'; 
            for (var [key, value] of Object.entries(ret[i])) {
                if (key == 'photo'){
                    new_html+= '<div id="img_cont">   <img src="'+ value +'"/> </div>';
                }
                else if (key == 'id') {
                    new_html+= '<input type="button" value="supprimer"  name="supression" class="suppression" data-id="'+ret[i]["id"][0]+'"/>';

                }
                else{
                    new_html+= '<p> <b> '+key.replace("_", " ")+'</b>  : ' +value +'</p>'; 
                }
            }
            new_html+='</div>';
        }
        new_html+='</div>';
        new_html+='</div>';

        // partie Suppression
        document.querySelector('#Liste_Recette').innerHTML = new_html; //association à l'id listes de message qui est dans html
        //var suppression = document.querySelector('.suppression'); //on récupère l'élément par son id
        var suppression = document.getElementsByClassName("suppression");

        //Parcours du tableau suppression
        for (var i = suppression.length - 1; i >= 0; i--) {
            suppression[i].addEventListener('click', function(prevention){ // lorsqu'on clique sur l'évènement submit    
                console.log(this.getAttribute("data-id"));
                var id = this.getAttribute("data-id");
                var request_2 = new XMLHttpRequest();

                request_2.addEventListener('loadend', function(data) {
                    var returne = JSON.parse(data.target.responseText);
                    if (returne["val"] == false) {
                        document.location.href = "Connexion.php";
                    }
                    else{
                        request.abort();
                        affiche_dynamique();
                    }
                });

                
                request_2.open("GET", "ws_suppression.php?id="+id);
                request_2.send();
                
            });
        }
    });

    if(fg.value!=""){
        request.open("GET", "ws_lecture.php?search="+fg.value);
    }
    else{
        request.open("GET", "ws_lecture.php");
    }
    
    request.send();
}

function post_message(formulaire) {
    var request = new XMLHttpRequest(); //c'est lui qui offre open et send, c'est lui qui crée l'objet ajax
    var data = new FormData(formulaire); //c'est ça qu'on tape , pour que ça contienne ce que j'ai tapé

    request.addEventListener('load', function(data) { // Il faut que tout soit chargé avant d'afficher et ce affiche est déclenché par le click
        affiche_dynamique();
    });

    request.open("POST", "ws_ecriture.php");
    request.send(data);
}

document.addEventListener('DOMContentLoaded', function () {

    var bouton = document.getElementById('afficher'); //on récupère l'élément par son id

    if (bouton) {
        bouton.addEventListener('click', function(prevention){ // lorsqu'on clique sur l'évènement submit    
            prevention.preventDefault(); //pour prevenir ce qu'il fait par defaut, ne fais pas ce que tu fais d'habitude
            affiche_dynamique();
        });
    }

    var formulaire = document.getElementById('formu'); //on récupère l'élément par son id

    formulaire.addEventListener('submit', function(prevention) { // lorsqu'on clique sur l'évènement submit    
        prevention.preventDefault(); //pour prevenir ce qu'il fait par defaut, ne fais pas ce que tu fais d'habitude
        post_message(formulaire);
    });
});
