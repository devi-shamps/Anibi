<?php

function controleurPrincipal($action) {
    $lesActions = array();
    $lesActions["defaut"] = "connexion.php";
    $lesActions["connexion"] = "listeExpos.php";
    $lesActions["deconnexion"] = "deconnexion.php";
    $lesActions["listeexpo"] = "listeExpos.php";

    
    
    if (array_key_exists($action, $lesActions)) {
        return $lesActions[$action];
    } 
    else {
        return $lesActions["defaut"];
    }
}

?>