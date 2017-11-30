<?php
$uri = $_SERVER['REQUEST_URI'];
$parts_uri = explode("/", $uri);
include_once('bdd.php');


switch ($parts_uri[2]) {
  case"":

    header('Location: /projet_films/home/1');

  break;

  case "home":
    include_once('models/movie.php');

    $max = 6;

    $result = getFilms($pdo, $parts_uri[3], $max);
    $pagesTotales = $result[0];
    $pageCourante = $result[1];
    $depart = $result[2];
    $genre = getGenre($pdo);

    include_once('view/header.php');
    include_once('view/pagination.php');
    include_once('view/footer.php');

  break;

  case "film":

    include_once('models/movie.php');

    $resultFilm = filmDesc($pdo, $parts_uri[3]);
    $film = getFilmById($pdo, $parts_uri[3]);
    $user = getUser($pdo);
    $genre = getGenre($pdo);

    include_once('view/header.php');
    include_once('view/film.php');
    include_once('view/footer.php');

  break;

  case "formulaire":

    include_once('view/header.php');
    include_once('view/formfilms.php');
    include_once('view/footer.php');

  break;

  case"inscription":

    include_once('models/movie.php');
    include_once('models/inscription.php');
    inscription($pdo, $parts_uri);
    /*include_once('view/inscription.php');*/

    include_once('view/header.php');
    include_once('view/inscription_view.php');
    include_once('view/footer.php');

  break;

  case"poste":
    include_once('view/header.php');
    include_once("view/traitement.php");
    include_once('view/footer.php');
  break;

  default:

    echo "404 not Found !!! ";
    echo "<a href='/projet_films/home/1' class='btn'>home</a>";

  break;

}
?>
