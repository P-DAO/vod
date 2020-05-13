<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Recherche</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="style/vod.css">
    </head>
	<body>
	<header>
		<div class="menu">
		<nav>
			<a class="active" href="vod.html" title="Accueil">Films VOD </a>
			<a href="consulterFilms.php">Consulter</a>
			<a href="saisieTitreRecherche.html">Rechercher</a>
			<a href="saisieFilm.html">Ajouter</a>
			<a href="saisieTitreSuppression.html">Supprimer</a>
		</nav>
		</div>
	</header>
	<body>
		<section class="rech">
		<h1>Résultat de la recherche: </h1> <br/>
			<p>		
			<?php
				$films = file("data/vod.csv");
				$ligne = false;
					foreach ($films as $film){
						$films =rtrim ($film);
						list ($titre, $annee, $real) = explode(':', $film);
						if(ucwords( strtolower($_GET["rechTitre"])) == $titre){
							$ligne = true;
							echo "Titre du Film: " . $titre ."<br/>";
							echo "Année de sortie: " . $annee ."<br/>";
							echo "Le Réalisateur du film: ".$real ."<br/>";
							break;
						}
					}
					if($ligne == false){
						echo "La recherche n'a pas aboutie";
					}
			?>
			</p>
		<br/>	
		
		<a class="retour" href="http://127.0.0.1/SI6/SI6-Fichiers-texte/saisieTitreRecherche.html"> RETOUR </a> 
		</section>
	</body>
</html>