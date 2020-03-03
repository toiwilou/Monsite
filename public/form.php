<?php

/**
 * Liste des variable du formulaire 
 */
$sexe = $_POST['sexe'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$telephone = $_POST['telephone'];
$email = $_POST['email'];
$message = $_POST['message'];

$Subject = "Toiwilou's website";
$SubjectT = "$sexe $nom $prenom";

$header = "MIME-version: 1.0 \r\n";
$header .= 'From: <' . $email . '>' . "\n";
$header .= 'Content-type:text/html; charset="utf-8"' . "\n";
$header .= "Content-Transfer-Encoding: 8bit \n";

$headerT = "MIME-version: 1.0 \r\n";
$headerT .= 'From: "'. $email . '"<' . $email . '>' . "\n";
$headerT .= 'Content-type:text/html; charset="utf-8"' . "\n";
$headerT .= "Content-Transfer-Encoding: 8bit \n";

$lemail = '<html><body>Bonjour '. $sexe .' '. $nom .' '. $prenom .', '
        . nl2br("\n\n") .'Nous avons bien reçu votre message. Nous vous remercions pour votre visite '
        . 'et de nous avoir contactés.'. nl2br("\n\n") .'Merci !</body></html>';
$texte= '<html><body>'. $message . nl2br("\n\n\n Téléphone : ") . $telephone .'</body></html>';

mail("toiwilouhassane@gmail.com", $SubjectT, $texte, $headerT);
mail($email, $Subject, $lemail, $header);
    header('Location: /Monsite/public/contact.php'); 


