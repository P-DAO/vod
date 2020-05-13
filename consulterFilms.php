<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Consulter</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="style/vod.css">
    </head>
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
	<section class="consult">
	<h1>Liste des films en VOD</h1>
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
						$lines = file("data/vod.csv");
							foreach($lines as $n => $line){
								$lines[$n] = rtrim ($line);
								echo "<tr>";
								list($titre, $annee, $real) =  explode(':', $line);
								echo "<td>" . $titre . "</td>";
								echo "<td>" . $annee . "</td>";
								echo "<td>" . $real . "</td>";
								echo "</tr>";
								
							}
					?>
				</tbody>
		</table>
	</section>
	</body>
</html>