<?php
function getFilms($pdo, $uri, $max){
  $totales = $pdo->query('SELECT titre FROM film');
  $total = $totales->rowCount();
  $pagesTotales = ceil($total/$max);
  $pageCourante = intval($uri);

  if($pageCourante > $pagesTotales){
     $pageCourante = $pagesTotales;
  } else {
     $pageCourante = $pageCourante;
  }
  $depart = ($pageCourante - 1) * $max;

  $reponse = [
    $pagesTotales,
    $pageCourante,
    $depart,
  ];

  return $reponse;

}

function filmDesc($pdo, $parts_uri){
  $film = $pdo->query("SELECT * FROM film");
  if(isset($parts_uri[3])){
    foreach ($film as $films){
      if($parts_uri[3] == $films[0]){
      /*echo '<a href="javascript:history.go(-1)">Retour</a>';*/
      var_dump($films);

      }
    }
  }
}

// function getGenre($pdo){
//   $genres = $pdo->query("SELECT film.titre, genre.nom FROM `l_film_genre` INNER JOIN film on film.id = l_film_genre.id_film INNER JOIN genre on genre.id = l_film_genre.id_genre");
//   foreach ($genres as $genre){
//     if ($titre["id"] == $genres["id"]){
//       var_dump($genre);
//     }
//   }
// }

function getFilmById($pdo, $id){
  $film = $pdo->query('SELECT * FROM film WHERE id = '.$id.'');
  return $film;
}
?>
