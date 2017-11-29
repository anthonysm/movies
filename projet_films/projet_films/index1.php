<?php
$uri = $_SERVER['REQUEST_URI'];
$parts_uri = explode("/", $uri);
include_once('bdd.php');

switch ($parts_uri[2]){
  case"":{
  echo'bonjour';
  }
}
switch ($parts_uri[2]) {

  case "home":
  include_once('models/movie.php');

  $max = 6;

  $result = getFilms($pdo, $parts_uri[3], $max);
  $pagesTotales = $result[0];
  $pageCourante = $result[1];
  $depart = $result[2];

  include_once('view/header.php');
  include_once('view/pagination.php');
  include_once('view/footer.php');
  break;

  case "film":
  include_once('view/header.php');
  include_once('models/film.php');
  include_once('view/footer.php');
  filmDesc($pdo, $parts_uri);
  break;

  default:
  echo "404 not Found !!! ";
  echo "<a href='/projet_films/home'>home</a>";
  break;

}
?>
