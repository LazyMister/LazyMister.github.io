<?php
require 'fonctions.php';
require 'head.template.php';

if($_SERVER ['REQUEST_METHOD']=='POST' && $_POST['form'] == 'newMessage'){
    
    $nom = $_POST['user_nom'];
    $prenom = $_POST['user_prenom'];
    $ecole = $_POST['user_ecole'];
    $mail = $_POST['user_mail'];
    $texte = $_POST['user_text'];
    
    $data = [ 
        'envoi_nom' => $nom, 
        'envoi_prenom' => $prenom,
        'envoi_ecole' => $ecole,
        'envoi_mail' => $mail,
        'envoi_texte' => $texte
    ];

    $requete = $connexion->prepare("INSERT INTO messages (message_nom, message_prenom, message_Ecole, message_mail, message_text ) VALUES (:envoi_nom, :envoi_prenom, :envoi_ecole, :envoi_mail, :envoi_texte)");
    $requete->execute($data);

}

    ?>

    <p>Message envoyé à Bogdan. Retour au <a href="menu.php">menu.</a> </p>