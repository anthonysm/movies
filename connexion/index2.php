<?php
$uri = $_SERVER['REQUEST_URI'];
$parts_uri = explode("/", $uri);
include_once('bdd.php');

switch ($parts_uri[2])
{
    case"":
        {
            echo'bonjour';
        }
}
switch ($parts_uri[2]) {
    case "home":
        
        include_once('models/movie.php');
        $min = 0;
        $max = 8;
        $result = getMovies($pdo, $min, $max); 
        break;
    case "film":
        include_once('models/films.php');
        filmDesc($pdo, $parts_uri);
        break;
     default:
       echo "404 not Found !!! ";
       echo "<a href='/cinema/home'>home</a>";
       break; 
}

?>