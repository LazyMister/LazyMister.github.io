<?php
require 'fonctions.php';
require 'head.template.php';
 ?>
<body class="dark">
     <?php require 'menu.template.php' ?>

<div id="Profil" class="active">
     <div class="div" id="me">
          <div class="swiper">
               <div class="swiper-wrapper">
                    <div class="swiper-slide">
                         <img src='#' alt='ma photo'>
                         <p>Je suis Bogdan Monoté et j'ai 22 ans. Actuellement en 2ème année de licence informatique à l'Université de Rouen (Campus du Madrillet), je souhaite devenir développeur Web.</p>
                    </div>

                    <div class="swiper-slide">
                         
                         <p>Ici vous pouvez en apprendre plus sur mes compétences dans les différents languages que j'ai pu apprendre et utiliser jusqu'ici. Sur un système de notation entre "basique" et "maîtrisé", j'estime avoir un bon niveau dans les langages web. En ce qui concerne d'autres paradigmes comme la programmation impérative ou la POO, mes connaissances restent basiques mais non moins utiles et exploitables; je suis toujours en apprentissage de ces langages-ci.</p>
                    </div>

                    <div class="swiper-slide">
                         
                         <p>J'ai découvert cet attrait du codage à l'âge de 15 ans et aujourd'hui je souhaite agir et me lancer en intégrant votre école dans l'optique d'apprendre encore et toujours plus. L'informatique évolue de plus en plus et la toile aussi. Des besoins différents dans énormément de domaines comme l'industrie ou le sport voient le jour.</p>
                    </div>

               </div>
               <div class="swiper-button-prev"></div>
               <div class="swiper-button-next"></div>
          </div>
     </div>

     <div class="div" id="competence">
     <div class="swiper">
          <div class="swiper-wrapper">
               <div class="swiper-slide">
                    <h1>LANGAGES WEB</h1>
                    <ul>
                         <li>HTML</li> <progress value="70" max="100">70 %</progress>
                         <li>CSS</li> <progress value="65" max="100">65 %</progress>
                         <li>JAVASCRIPT</li> <progress value="50" max="100">50 %</progress>
                         <li>PHP</li> <progress value="50" max="100">50 %</progress>
                         <li>MySql</li> <progress value="50" max="100">70 %</progress>
                    </ul>
               </div>

               <div class="swiper-slide">
                    <h1>PROGRAMMATION FONCTIONNELLE </h1>
                    <ul>
                         <li>OCAML</li> <progress value="20" max="100">20 %</progress>              
                    </ul>
               </div>

               <div class="swiper-slide">
                    <h1>POO </h1>
                    <ul>
                         <li>JAVA</li> <progress value="20" max="100">20 %</progress>             
                    </ul>
               </div>

               <div class="swiper-slide">
                    <h1>PROGRAMMATION IMPERATIVE </h1>
                    <ul>
                         <li>C</li> <progress value="30" max="100">30 %</progress>
                         <li>PYTHON</li> <progress value="35" max="100">35 %</progress>          
                    </ul>
               </div>
          </div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
     </div>

     </div>
</div>

<div id="Portfolio" class="hidden">
     <div class="div2">
          <h1>Mon Calendrier personnalisé </h1>
          <img src="preview.png" alt="Mon calendrier">
          <a href="Calendrier/accueil.php">Mon Calendrier</a><br>
          <p>Ce calendrier personnalisé a été réalisé lors d'un projet en deuxième année de licence informatique. Il est agencé autour d'un script JS qui permet de passer au mois suivant/précédent tout en respectant le nombre de jours et leur position. Lorsqu'un utilisateur est inscrit dans la BDD et connecté à sa session, il peut alors ajouter et retirer des évènements. Cependant, si l'utilisateur est seulement un visiteur, il ne peut alors qu'observer le calendrier sans avoir son propre espace. </p>
     </div>
</div>

<div id="Contacts" class="hidden">
<div class="cntct" >
     <h2>Contactez-moi</h2>
		<form method="post" action="send_message.php">
        <input type="hidden" name="form" value="newMessage">
			<fieldset>
				<label for="user_nom"></label> 
                <input name="user_nom" type="text" id="user_nom" placeholder="Votre Nom" required />

                <label for="user_prenom"></label> 
                <input name="user_prenom" type="text" id="user_prenom" required placeholder="<?php echo $_SESSION['prenom']?> ?"/>

				<label for="user_ecole"></label>
                <input type="text" name="user_ecole" id="user_ecole" required placeholder="Votre Ecole"/>

	
				<label for="user_mail"></label>
                <input type="email" name="user_mail" id="user_mail" required placeholder="Votre adresse e-mail" /> <br />


                <label for="user_text"></label>
                <textarea name="user_text" id="user_text" required placeholder="Notez votre message"></textarea>
			</fieldset> <br />

			<p> Tous les champs sont obligatoires</p>
			<p><input class="submit" type="submit" value="Envoyer >" /></p>
		</form>
		</div>
		<div class="link_ins">
		<p><a href="index.php">Retour à l'accueil</a></p>
		</div>
</div>
<h2>Commentaires </h2>
<div id="postComment">
     <form method="post" action='comment.php' >
          <input type="hidden" name="form" value="newComment">
          <fieldset>
          <textarea name="comment" placeholder="Commentaire..."></textarea>
          </fieldset>
          <button class="submit" type="submit">Poster</button>
     </form>
</div>
<div id="readComment">
     <fieldset>
     <ul>
          <?php foreach( $res as $data) : ?>
          

          <li>
                    <div class="pseudo_style"> 
                         <?php echo  $data['commentaire_prenom'] . " a écrit: " ;  ?> 
                    </div> 
                    <?php echo $data['commentaire_texte'] ; ?> 

                    <form id="supp_tweet" method="POST" action="comment.php"> 
                         <input type="hidden" name="form" value="suppComment">
                         <input type="hidden" name="id_comment" value="<?php echo $data['commentaire_id']?>">
                         <button class="submit" type="submit">Supprimer</button>
                    </form> 
          </li><br>

          <?php endforeach; ?>
     </ul>
     </fieldset>
</div>
<div class="lightmode"><i class="fas fa-regular fa-lightbulb">lightmode</i></div>
<?php session_write_close();?>
     <script src="http://code.jquery.com/jquery-3.6.0.min.js"></script>
     <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
     <script src="menu.js"></script>
</body>
</html>
