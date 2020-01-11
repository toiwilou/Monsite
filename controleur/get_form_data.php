<?php

/**
 * Liste des variable du formulaire 
 */ 
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$adresse = $_POST['adresse'];
$telephone = $_POST['telephone'];
$email = $_POST['email'];
$message = $_POST['message'];

// Ouverture de la connexion à la base
try{
    $bdd = new PDO('mysql:host=localhost;dbname=site_personnel;charset=utf8', 'toiwilou', 'toiwilou12');
} catch (Exception $ex) {
    die($ex->getMessage());
}


// Insertion
//$bdd->('INSERT INTO jeux_video(nom, possesseur, console, prix, nbre_joueurs_max, commentaires) VALUES(:nom, :possesseur, :console, :prix, :nbre_joueurs_max, :commentaires)');
$req = $bdd->prepare("INSERT INTO contact (nom, prenom, adresse, telephone, email, message, created_at, update_ut) VALUES (:nom, :prenom, :adresse, :telephone, :email, :message, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP)");
$req->execute([
    'nom' => $nom,
    'prenom' => $prenom,
    'adresse' => $adresse,
    'telephone' => $telephone,
    'email' => $email,
    'message' => $message
]);

// recuperation des donnees 
$reponse = $bdd->query('select * from site_personnel.contact');


//affichage des donnees 
while ($donnees = $reponse->fetch()){
    echo ($donnees['nom']) . '<br />';
    echo ($donnees['prenom']) . '<br />';
    echo ($donnees['email']) . '<br />';
}

header('Location: http://vectograph.local:8080/Monsite/public/contact.php');