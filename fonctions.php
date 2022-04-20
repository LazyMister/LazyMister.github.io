<?php 
/*---------------CONNEXION A LA BDD----------------*/
try {
		$connexion =new PDO("mysql:host=localhost;dbname=projet", "root", "");
	}
	catch(PDOException $e){
		die('Erreur : SITE INDISPONIBLE ! ! ! ! ' . $e->getMessage());
	}
/*----------------FIN CONNEXION A LA BDD----------------*/


if( ! ini_get('date.timezone') )
{
    date_default_timezone_set('Europe/Paris');
}

function debug($data) {
	echo '<pre>';
	var_dump($data);
	echo'</pre>';
	/*die();*/
	}

?>



<?php 
	$requete = $connexion->prepare('SELECT * FROM commentaires');
	$requete->execute();

	$res = $requete->fetchAll(PDO::FETCH_ASSOC);

/*debug($res);*/
?>