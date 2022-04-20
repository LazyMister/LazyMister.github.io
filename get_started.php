<?php
require 'fonctions.php';
require 'head.template.php';


if($_SERVER ['REQUEST_METHOD']=='POST' && $_POST['accueil'] != '') :
    $prenom = $_POST['accueil'];
    $_SESSION['prenom'] = $prenom;

    $data = [ 'envoi_nom' => $prenom ];
        $requete = $connexion->prepare("INSERT INTO visiteurs (visiteur_nom) VALUES (:envoi_nom)");
        $requete->execute($data); ?>
<div class="welcome">
         <p>Welcome <span>@<?php  echo $_SESSION['prenom']; ?></span> !</p> 
         <a href='menu.php' id='parcourir'><button > Parcourir ></button></a>
</div> 
<?php
 elseif (isset($_SESSION['prenom'])) : ?>
 <div class="welcome">
    <p>Welcome <span>@<?php echo $_SESSION['prenom'] ?> </span> !</p> 
    <a href='menu.php' id='parcourir'><button > Parcourir ></button></a> 
 </div>
    <?php
   else : ?>
        <p>Une erreur s'est produite !! retournez à la <a href="accueil.php">page d'accueil.</a></p>';
        <?php 
        endif;
        ?>
    
    



