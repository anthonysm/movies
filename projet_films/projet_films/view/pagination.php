<?php
$film = $pdo->query('SELECT * FROM film ORDER BY titre DESC LIMIT '.$depart.','.$max);
while($films = $film->fetch()) {
?>
<div class="container-fluid">
  <div class="container">
    <div class="row">
      <div class="hoverable col s12 m6 l6">
        <b><?php echo $films['titre']; ?></b><br />
        <p><?php echo $films['annee']; ?> - <?php echo $films['realisateur']; ?></p>
      </div>
    </div>
  </div>
</div>
<?php
}
?>
<?php
for($i = 1; $i <= $pagesTotales; $i++) {
   if($i == $pageCourante) {
      echo $i.' ';
   } else {
      echo '<a href="'.$i.'">'.$i.'</a> ';
   }
}
?>
