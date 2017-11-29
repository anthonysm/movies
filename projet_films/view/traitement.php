<?php

$titre = $_POST['titre'];
$annee = $_POST['annee'];
$realisateur = $_POST['realisateur'];
// $genre = $_POST['genre'];
$description = $_POST['description'];
$errortitre = "";
$errorannee = "";
$errorrealisateur = "";
$errorgenre = "";
$errordescription = "";

if(isset($_POST['titre'])){

    if(empty($_POST['titre'])){
        echo "erreur dans le titre </br>";
        $errortitre = true;
    }
}

if(isset($_POST['realisateur'])){

    if(empty($_POST['realisateur'])){
        echo "erreur dans le nom du realisateur </br>";
        $errorrealisateur = true;
    }
}

if(isset($_POST['description'])){

    if(empty($_POST['description'])){
        echo "erreur dans la description </br>";
        $errordescription = true;
    }
}

if($errortitre == true || $errorrealisateur == true || $errordescription == true){
    echo "DOMMAGE";
}
else{
    echo "bravo</br>";

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "movies";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
    // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
        $stmt = $conn->prepare("INSERT INTO film (titre, annee, description, realisateur)
            VALUES (:titre, :annee, :description, :realisateur)");
        $stmt->bindParam(':titre', $_POST["titre"]);
        $stmt->bindParam(':annee', $_POST["annee"]);
        $stmt->bindParam(':description', $_POST["description"]);
        $stmt->bindParam(':realisateur', $_POST["realisateur"]);


    // insert a row
        $stmt->execute();


        // $stmt1=$conn->prepare("INSERT INTO FILMS (titre, annee, realisateur, description)
        //     VALUES (:titre, :annee, :realisateur, :description)");
        // $stmt->bindParam(':genre', $_POST["genre"]);
        echo "réussite";
    }

    catch(Exception $e)
    {


        exit();

    }
}

?>
