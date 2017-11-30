<div class="col s12 m6 l6">
  <form class="col s12" action="/projet_films/inscription/validation" method="post">
    <div class="row">
        <div class="input-field col s6">
          <input name="nom" id="prenom" type="text" class="validate">
          <label for="nom">Nom</label>
        </div>
        <div class="input-field col s6">
          <input name="prenom" id="prenom" type="text" class="validate">
          <label for="prenom">Prenom</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input name="pseudo" id="pseudo" type="text" class="validate">
          <label for="pseudo">Pseudo</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input name="mdp" id="password" type="password" class="validate">
          <label for="mdp">Mot de Passe</label>
        </div>
      </div>
    <input type="submit" class="btn valide" value="Inscription">
  </form>
</div>
