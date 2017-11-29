<?php
function filmDesc($pdo, $parts_uri){
  $film = $pdo->query("SELECT * FROM film");
  if(isset($parts_uri[3])){
    foreach ($film as $films){
      if($parts_uri[3] == $films[0]){
        var_dump($films);
      }
    }
/*else
{
echo"<a href='/cinema/home'>Vous n'avez selectionner aucun films</a>";
}*/
  }
}
?>
