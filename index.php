<?php session_start();
unset($_SESSION['prenom']);

/*var_dump($_SESSION['prenom']); die();*/ ?>

<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Twitter</title>
        <link rel="stylesheet" href="style.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&family=Nunito&display=swap" rel="stylesheet">
    </head>

    <body>
        <div id='start'>
            <p>Bonjour ! Quel est votre nom ?<span class="start_span_active">_</span></p> <br><br>
            <form method="POST" action="get_started.php">
                <input type="text" name="accueil" required> 
                <button type="submit">Confirmer</button>
            </form>
        </div>


        <script>
        const span_active = document.querySelector('.start_span_active');
        function auto_effect() {
            if(span_active.className == 'start_span_active') {
                span_active.classList.toggle('start_span');
                span_active.classList.toggle('start_span_active');
            } else if (span_active.className == 'start_span') {
                span_active.classList.toggle('start_span');
                span_active.classList.toggle('start_span_active');
    }
        }
        setInterval(auto_effect, 500);
        
</script>
    </body>

</html>
