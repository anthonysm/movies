<?php
if($films = $film->fetch()) {
?>
<div class="container-fluid">
  <div class="container">
    <div class="row">
      <div class="col s12 m12 l12">
        <div id="img" class="col s12 m4 l4">
          <img src="http://localhost/projet_films/img/<?php echo $films['id']?>.jpg" alt="">
        </div>
        <div class="col s12 m8 l8">
          <p><b><?php echo $films['titre']; ?></b></p>
          <p><u>Année:</u> <?php echo $films['annee']; ?></p>
          <p><u>Réalisateur:</u><br /> <?php echo $films['realisateur']; ?></p>
          <p><u>Genres:</u>
            <?php foreach ($genre as $genreso){
                    if ($films['titre'] == $genreso['titre']){
                      echo $genreso['nom'].' ';
                    }
                  } ?></p>
          <p><u>Ajouté par:</u>
            <?php foreach ($user as $ajout){
                    if($ajout['titre'] == $films['titre']){
                      echo $ajout['pseudo'];
                    }
                  } ?></p>
        </div>
      </div>
      <p>Description: <?php echo $films['description']; ?><p>
      <a href="javascript:history.go(-1)">Retour</a>
    </div>
  </div>
</div>
<?php
}
else {?>
  <h4>Aucun film selectionner</h4>
  <a href="/projet_films/home/1" class="btn black-text">Accueil</a>
  <?php
}
?>
