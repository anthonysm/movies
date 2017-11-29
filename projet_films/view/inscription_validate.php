    <?php
        date_default_timezone_set('Europe/Paris');
        $to = "romain.t@codeur.online";
        $object = "Formulaire en php";
        $valide = 0;
        $total = 0;

        // Si prenom existe
        if(isset($_POST['nom']))
        {
            $nom = $_POST['nom'];
            if (empty($nom) || !preg_match("#^[a-zA-Z_]+$#", $nom))
                {
                    echo"<br/>";
                    echo "Votre nom :";
                    echo "Erreur (Remplir le champ ou retirer les chiffres)";
                    $total++;
                }
                else
                {
                    $total++;
                    $valide++;
                }
        }
        else{$nom = "";}

        if(isset($_POST['prenom']))
        {
            $prenom = $_POST['prenom'];
            if (empty($prenom) || !preg_match("#^[a-zA-Z_]+$#", $prenom))
                {
                    echo"<br/>";
                    echo "Votre prenom :";
                    echo "Erreur (Remplir le champ ou retirer les chiffres)";
                    $total++;
                }
                else
                {
                    $total++;
                    $valide++;
                }
        }
        else{$prenom = "";}

        if(isset($_POST['pseudo']))
        {
            $pseudo = $_POST['pseudo'];
            if (empty($pseudo) || !preg_match("#^[a-zA-Z_]+$#", $pseudo))
                {
                    echo"<br/>";
                    echo "Votre pseudo :";
                    echo "Erreur (Remplir le champ ou retirer les chiffres)";
                    $total++;
                }
                else
                {
                    $total++;
                    $valide++;
                }
        }
        else{$pseudo = "";}

        // Si nom existe
        if(isset($_POST['mdp'])){
            $mdp = md5($_POST['mdp']);
            if (empty($mdp) || !preg_match("#^[a-z_0-9]+$#", $mdp))
                {
                if (isset($_POST['rmdp']))
                {
                    $rmdp = $_POST['rmdp'];
                    $motpass = $_POST['mdp'];
                    if($rmdp == $motpass)
                    {
                        $options = [
                            'cost' => 11,
                            'salt' => mcrypt_create_iv(22, MCRYPT_DEV_URANDOM),
                            ];
                        $mdp = crypt($motpass,PASSWORD_BCRYPT, $options);
                    }
                }
                else
                {
                    echo"<br/>";
                    echo "Votre mot de passe :";
                    echo "Erreur (Remplir le champ ou retirer les chiffres)"; 
                }
                    $total++;
                }
            else
                {
                    $total++;
                    $valide++;
                }
        }
        else{$mdp ="";}

/*        if(isset($_POST['age']))
        {
            $age = $_POST['age'];
            if (empty($age))
            {
                echo"<br/>";
                echo "Votre age : $age";
                echo "écrire votre age";
                $total++;
            }
            else
            {
                $total++;
                $valide++;
            }
         echo"<br/>";
        }
        else{$age = "";}*/

        // Si code postale existe
/*        if(isset($_POST['cp']))
        {
            $cp = $_POST['cp'];
            if (empty($cp)|| strlen($cp) > 5 || strlen($cp) < 5 || !preg_match("#^[0-9_]+$#", $cp))
            {
                echo"<br/>";
                echo "Votre code postal :";     
                echo "Erreur (Chiffre uniquement et 5 caractère possible)";
                $total++;
            }
            else
            {
                $total++;
                $valide++;
            }
         echo"<br/>";
        }
        else{$cp = "";}

        // Si ville existe
/*        if(isset($_POST['ville']))
        {
            $ville = $_POST['ville'];
            if (empty($ville))
            {
                echo"<br/>";
                echo "Votre ville : $ville";
                echo "écrire dans le champs ville";
                $total++;
            }
            else
            {
                $total++;
                $valide++;
            }
         echo"<br/>";
        }
        else{$ville = "";}*/

        // Si email existe
/*        if(isset($_POST['email']))
        {
            $email = $_POST['email'];
            if (empty($email) || !preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]{2,}\.[a-z]{2,6}$/", $email))
                {
                    echo"<br/>";
                    echo "Votre Email :";
                    echo "Erreur (Il faut une adresse valide)";
                    $total++;
                }
                else
                {
                    $total++;
                    $valide++;
                }           
        }
        else{$email = "";}*/

        // Si message existe
/*        if(isset($_POST['message']))
        {
            $message = $_POST['message'];
            if (empty($message) || strlen($message) < 15)
            {
                echo"<br/>"; 
                echo "Votre message :";
                echo " Erreur (15 caractère min ou doit être remplis)";
                $total++;
            }
            else
            {
                $total++;
                $valide++;
            }
        }
        else{$message = "";}*/

         echo"<br/>";
         if ($valide == $total)
            {
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "movies";

            try {
                $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password, array(
                    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
                    // set the PDO error mode to exception
                    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $stmt = $pdo->prepare("INSERT INTO `user`(`nom`, `prenom`, `identifiant`, `mdp`) VALUES (:nom, :prenom, :identifiant, :mdp)");
                    $stmt->bindParam(':nom', $nom);
                    $stmt->bindParam(':prenom', $prenom);
                    $stmt->bindParam(':identifiant', $pseudo);
                    /*$stmt->bindParam(':age', $age);*/
                    $stmt->bindParam(':mdp', $mdp);
                    /*$stmt->bindParam(':email', $email);*/

                    $stmt->execute();
                echo 'reussi';
                }
            catch(PDOException $e)
                {
                echo "Error: " . $e->getMessage();
                echo 'echouer';
                }
            }
            else
            {
                echo"Inscription échouer";
            }
    ?>