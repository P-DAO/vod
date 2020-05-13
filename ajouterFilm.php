<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Ajout</title>
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
		<section class="ajout">
			<h1>Résultat du film ajouter:</h1>
			<table>
				<thead>
					<tr>
						<th>Titre du Film</th>
						<th>Année de sortie </th>
						<th>Réalisateur</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$lignes = fopen( "data/vod.csv" , "a" ) ;
					$film = ucwords( strtolower($_POST["adTitre"])) . ":" . $_POST["adAnnee"] . ":" .ucwords( strtolower($_POST["adReal"])) . "\n" ;
					fwrite( $lignes , $film ) ;
					fclose( $lignes ) ;
					echo "<td>" . $_POST["adTitre"] . "</td>" ;
					echo "<td>" . $_POST["adAnnee"] . "</td>" ;
					echo "<td>" . $_POST["adReal"] . "</td>" ;
					?>
				</tbody>
			</table>
			<p>Votre film a bien été ajouté.<p/>
		<section>
		<a class="retour" href="http://127.0.0.1/SI6/SI6-Fichiers-texte/saisieFilm.html"> RETOUR </a> 
	</body>
</html>