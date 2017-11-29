// $(function(){
// 	$("#formulaire").submit(function(){
// 		titre = $(this).find("input[name=titre]").val();
// 		annee = $(this).find("input[name=annee]").val();
// 		realisateur = $(this).find("input[name=realisateur]").val();
// 		genre = $(this).find("input[name=genre]").val();
// 		description = $(this).find("input[name=genre]").val();
// 		$.POST("traitement.php",(titre: titre, annee: annee, realisateur: realisateur, genre: genre, description: description),function(data) {
// 			alert(data);
// 		});
// 		return false;
// 	});
// });

$genre('.chips-autocomplete').material_chip({
    autocompleteOptions: {
      data: {
        'Action': null,
        'Comèdie': null,
        'Drame': null,
				'Science-Fiction': null,
				'Fantastique': null,
				'Animation': null,
				'Comèdie Dramatique': null,
        'Comèdie Musicale': null,
        'Policier': null,
				'Aventure': null,
				'Romance': null,
				'Feel-good': null,
				'Historique': null,
				'Thriller': null,
				'Road-Trip': null
      },
      limit: Infinity,
      minLength: 1
    }
  });

$('select').material_select('destroy');
