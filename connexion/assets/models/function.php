<?php

/* Tout les rang */
function rang($rang)
{
     if ($rang == 2)
    {
        echo 'Admin';
    }
    elseif ($rang == 1)
    {
        echo 'Moderateur';
    }
    elseif ($rang == 0)
    {
        echo 'membre';
    }
    else 
    {
        echo 'pas de rang';
    }
}
/* Fonction pour voir tout les inscrit */
function connexion($pdo){
    $connect = $pdo->query("SELECT * FROM con");
    $connexion_total = $pdo ->query("SELECT COUNT(*) FROM con");
    foreach ($connect as $connexion)
    {
        $options = [
    'cost' => 11,
    'salt' => mcrypt_create_iv(22, MCRYPT_DEV_URANDOM),
];
        for($i = 0;$i < 1;$i++)
        {
            echo $connexion["pseudo"];
            /*echo password_hash($connexion["mdp"], PASSWORD_BCRYPT, $options);*/
            echo md5($connexion["mdp"]);
            rang($connexion["rang"]);
            echo '<br/>';
        }
    }
}

function connexion_test ()
{
    include('../include/start.php');
    $error = [];
    $email = ['contact@dev.online', 'depannage@dev.online', 'test@local.dev'];
    
    $validator = new Validator($_POST);
    $validator->check('name', 'required');
    $validator->check('email', 'required');
    $validator->check('email', 'email');
    $validator->check('message', 'message');
}
?>