<?php

    /**
     * Nous créons deux variables : $username et $password qui valent respectivement "Sdz" et "salut"
     */

    $username = "Sdz";
    $password = "salut";

    if( isset($_POST['username']) && isset($_POST['password']) ){

        if($_POST['username'] == $username && $_POST['password'] == $password){ // Si les infos correspondent...
            session_start();
            $_SESSION['user'] = $username;
            echo "Success";        
        }
        else{ // Sinon
            echo "Failed";
        }

    }

?>
<!DOCTYPE html>
<html>
<head><!-- ... --></head>

<body>
    <div id="resultat">
        <!-- Nous allons afficher un retour en jQuery au visiteur -->
    </div>

    <form>
      r <!-- Le formulaire donné plus haut-->
    </form>

<script>

$(document).ready(function(){

    $("#submit").click(function(){

        $.post(
            'connexion.php', // Un script PHP que l'on va créer juste après
            {
                login : $("#username").val(),  // Nous récupérons la valeur de nos input que l'on fait passer à connexion.php
                password : $("#password").val()
            },

            function(data){

                if(data == 'Success'){
                     // Le membre est connecté. Ajoutons lui un message dans la page HTML.

                     $("#resultat").html("<p>Vous avez été connecté avec succès !</p>");
                }
                else{
                     // Le membre n'a pas été connecté. (data vaut ici "failed")

                     $("#resultat").html("<p>Erreur lors de la connexion...</p>");
                }
        
            },

            'text'
         );

    });

});

</script>
</body>
</html>

