<form action="traitement.php" class="container" method="POST" id="formulaire">
	<div class="row">
		<div class="col s12 m12 l12 xl12">
			<label for="exampleInputName2">Titre du film :</label>
			<input type="text" class="form-control" name="titre" placeholder="Titre">
		</div>
	</div>
	<div class="row">
		<div class="col s12 m12 l6 xl6">
		<label for="exampleInputName2">Année :</label>
		<select name="annee">
			<?php

			for($year = 1900;$year<=2017;$year++){

				echo '<option value='.$year.'>'.$year.'</option>';
			}

			?>
		</select>
		</div>
		<div class="col s12 m12 l6 xl6">
			<label for="exampleInputName2">Réalisateur :</label>
			<input type="text" class="form-control" name="realisateur" placeholder="Jean Film">
		</div>
	</div>
	<div class="row">
		<div class="col s12 m12 l12 xl12">
			<?php
			/* connexion bdd */
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "movies";

			try {
				$pdo = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
						// set the PDO error mode to exception
				$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			}
			catch(Exception $e){
				exit();
				echo "pas connecté";
			}
			/* for ($i = 0;$i <  touteles id;$i++ ) */
			/*  echo genre  */
			?>
			<div class="chips chips-autocomplete" data-index="0" data-initialized="true">

				<label>Genre</label>
				<input class="input" placeholder>
				<ul class="autocomplete-content dropdown-content"></ul>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col s12 m12 l12 xl12">
			<label for="exampleInputName2">Description :</label>
			<input type="text" class="form-control" name="description" placeholder="Description">
		</div>
	</div>
	<div class="row">
		<div class="col s12 m12 l12 xl12">
			<button type="submit">Valider</button>
			<button type="reset">Reset</button>
		</div>
	</form>
