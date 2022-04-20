   <?php

   if ($_SESSION['prenom'] =='') : ?>
    <p>Une erreur est survenue, retournez à <a href="accueil.php">l'accueil</a></p>
    <?php die(); ?>
     <?php  else : ?>
    <header>
            <h1 class="session">Bienvenue <?php echo $_SESSION['prenom']; ?> !</h1>
            <a href='accueil.php'><button class='submit fas fa-times'>&nbsp;&nbsp;Disconnect</button></a>
            <ul class="nav-active">
                <li class="navlink"><a href="get_started.php">Home</a></li>
                <li id="mProfil" class="navlink"><a href="#Mon_Profil">Mon profil</a></li>
                <li id="mPortfolio" class="navlink"><a href="#Portfolio">Portfolio</a></li>
                <li id="mContacts" class="navlink"><a href="#Contacts">Contactez-moi</a></li>
            </ul>
            <div class="burger">
                <i class=" submit fas fa-solid fa-caret-right">&nbsp;&nbsp; Menu</i>
            </div>
    </header>
<?php endif; ?>