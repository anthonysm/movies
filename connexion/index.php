<?php
$uri = $_SERVER['REQUEST_URI'];
$parts_uri = explode("/", $uri);
include_once ('assets/include/start.php');
include_once('assets/include/bdd.php');

switch ($parts_uri[2]) {
    case "home":
        include('assets/models/function.php');
        include('assets/include/connexion.php');
        echo '<a href="panel">Voir la listre des membres</a>';
        break;
    case "inscription":
        include('assets/models/function.php');
        include_once('assets/include/traitement.php');
        break;
    case "connexion":
        include('assets/models/function.php');
        break;
    case "panel":
        include('assets/models/function.php');
        connexion($pdo);
        break;
    case "test":
        include('teste.php');
    break;
     default:
       echo "404 not Found ! ";
       echo "<a href='/connexion/home'>home</a>";
       break; 
}
?>