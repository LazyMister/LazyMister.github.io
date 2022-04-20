<?php 
    require 'head.template.php';
    require 'fonctions.php';
?>

<?php

    if($_SERVER ['REQUEST_METHOD']=='POST' && $_POST['form'] == 'newComment') :
    
        $comment = $_POST['comment'];
        $prenom = $_SESSION['prenom'];
        
        
        $data = [ 
            'envoi_comment' => $comment,
            'envoi_prenom' => $prenom
        ];
    
        $requete = $connexion->prepare("INSERT INTO commentaires (commentaire_prenom, commentaire_texte ) VALUES (:envoi_prenom, :envoi_comment)");
        $requete->execute($data); ?>
        <p>Commentaire posté. Retour au <a href="menu.php">menu.</a> </p>

    <?php
     elseif ($_SERVER ['REQUEST_METHOD']=='POST' && $_POST['form'] == 'suppComment') :
        
        $idCommentaire = $_POST['id_comment'];
        debug($idCommentaire);
        
        $requete = $connexion->prepare("DELETE FROM commentaires WHERE commentaire_id = '". $idCommentaire . "'");

        $requete->execute();
    
    ?>

<p>Commentaire supprimé. Retour au <a href="menu.php">menu.</a> </p>

<?php 
endif;
?>