//Fonction pour la validation du formulaire de contact.
function validation() {
    confirm("êtes vous sûr de vouloir envoyer le formulaire??")
}


// Code pour la date.
var d = new Date();

function date() {
    document.getElementById("heure").innerHTML = d.toString();
}
setInterval(date, 1000);


//Fonction pour le menu Tabs.
function openDistrib(evt, distribName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tab-content");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(distribName).style.display = "block";
    evt.currentTarget.className += " active";
}
