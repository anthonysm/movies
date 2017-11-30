<?php
function validation($pdo){
  $valide = 0;
  $total = 0;

// Si prenom existe
  if (isset($_POST['nom'])){
    $nom = $_POST['nom'];
    if (empty($nom) || !preg_match("#^[a-zA-Z_]+$#", $nom)){
      echo"<br/>";
      echo "Votre nom :";
      echo "Erreur (Remplir le champ ou retirer les chiffres)";
      $total++;
    } else {
      $total++;
      $valide++;
    }
  }
  if (isset($_POST['prenom'])){
    $prenom = $_POST['prenom'];
    if (empty($prenom) || !preg_match("#^[a-zA-Z_]+$#", $prenom)){
      echo"<br/>";
      echo "Votre prenom :";
      echo "Erreur (Remplir le champ ou retirer les chiffres)";
      $total++;
    } else {
      $total++;
      $valide++;
    }
  } else {
    $prenom = "";
  }
  if (isset($_POST['pseudo'])){
    $pseudo = $_POST['pseudo'];
    if (empty($pseudo) || !preg_match("#^[a-z0-9A-Z_]+$#", $pseudo)){
      echo"<br/>";
      echo "Votre pseudo :";
      echo "Erreur (Remplir le champ ou retirer les chiffres)";
      $total++;
    } else {
      $total++;
      $valide++;
    }
  } else {
    $pseudo = "";
  }

  // Si mots de passe existe existe
  if (isset($_POST['mdp'])){
    $mdp = md5($_POST['mdp']);
    if (empty($pseudo) || !preg_match("#^[a-z1-9A-Z_]+$#", $pseudo)){
      $total++;
    } else {
      $total++;
      $valide++;
    }
  } else {
    $mdp = "";
  }
  if ($valide == $total){
    var_dump($_POST);
    $stmt = $pdo->prepare("INSERT INTO `user`(`nom`, `prenom`, `pseudo`, `mdp`) VALUES (:nom, :prenom, :pseudo, :mdp)");
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':prenom', $prenom);
    $stmt->bindParam(':pseudo', $pseudo);
    /*$stmt->bindParam(':age', $age);*/
    $stmt->bindParam(':mdp', $mdp);
    /*$stmt->bindParam(':email', $email);*/

    $stmt->execute();
  } else {
    echo"Inscription échouer";
  }
}
?>
