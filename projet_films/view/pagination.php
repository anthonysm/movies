<?php
$film = $pdo->query('SELECT * FROM film ORDER BY id LIMIT '.$depart.','.$max);
while($films = $film->fetch()) {
?>
<div class="hoverable col s12 m6 l6">
  <div id="img" class="col s12 m6 l6">
    <img src="http://localhost/projet_films/img/<?php echo $films['id']?>.jpg" alt="">
  </div>
  <div class="col s12 m8 l8">
    <p><b><?php echo $films['titre']; ?></b></p>
    <p><u>Année:</u> <?php echo $films['annee']; ?></p>
    <p><u>Réalisateur:</u><br /> <?php echo $films['realisateur']; ?></p>
  </div>
  <form class="col s12 m6 l4" method="POST" action="/projet_films/film/<?php echo $films['id']; ?>">
    <button class="wave-effect wave-light btn">Détails</button>
  </form>
</div>
<?php
}
?>
<?php
echo'<div class="col s12"><ul class="pagination center-align">';
if ($pageCourante == 1){
  echo'<li class="disabled waves-effect waves-red"><a href="#"><i class="material-icons">chevron_left</i></a></li>';
} else {
  echo'<li class="waves-effect"><a href="/projet_films/home/'.($pageCourante - 1).'"><i class="material-icons">chevron_left</i></a></li>';
}
for($i = 1; $i <= $pagesTotales; $i++) {
  if($i == $pageCourante) {
    echo '<li class="active"><a href="/projet_films/home/'.$i.'">'.$i.'</a></li>';
    // echo $i.' ';
  } else {
    echo '<li class="waves-effect"><a href="/projet_films/home/'.$i.'">'.$i.'</a></li>';
    // echo '<a href="'.$i.'">'.$i.'</a> ';
  }
}
if ($pageCourante == $pagesTotales){
  echo'<li class="disabled waves-effect waves-red"><a href="#"><i class="material-icons">chevron_right</i></a></li';
} else {
  echo'<li class="waves-effect"><a href="/projet_films/home/'.($pageCourante + 1).'"><i class="material-icons">chevron_right</i></a></li';
}
echo'</ul></div>';
?>
