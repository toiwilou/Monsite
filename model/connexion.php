<?php

// Ouverture de la connexion à la base
function mysqlCconnexion() {
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=site_personnel;charset=utf8', 'toiwilou', 'toiwilou12');
    } catch (Exception $ex) {
        die($ex->getMessage());
    }
    
    return $bdd;
}
