<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}
include_once "$racine/modele/authentification.inc.php";
error_reporting(0);

// recuperation des donnees GET, POST, et SESSION
if (isset($_POST["mailU"]) && isset($_POST["mdpU"])){
    $mailU=$_POST["mailU"];
    $mdpU=$_POST["mdpU"];
}
else
{
    $mailU="";
    $mdpU="";
}

// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 


// traitement si necessaire des donnees recuperees
login($mailU,$mdpU);

if (isLoggedOn()){ // si l'utilisateur est connecté on redirige vers le controleur monProfil
    include "$racine/vue/entete.html.php";
    include "$racine/vue/vueNouvEntre.php";
    include "$racine/vue/pied.html.php";
}
else{ // l'utilisateur n'est pas connecté, on affiche le formulaire de connexion
    // appel du script de vue 
    $titre = "Anibi";
    include "$racine/vue/entete.html.php";
    include "$racine/vue/vueAuthentification.php";
    include "$racine/vue/pied.html.php";
}

?>