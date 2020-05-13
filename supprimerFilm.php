<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Suppression</title>
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
		<section class="supp">
		<h1>Résultat de la suppression du film: </h1>
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
				$films = file("data/vod.csv");
				$lignes = fopen("data/vod.csv","w");
				$filmTrv = false;
				fwrite($lignes, '');
				foreach($films as $film){
						$films =rtrim ($film);
						list ($titre, $annee, $real) = explode(':', $film);
						if(ucwords( strtolower($_GET["suppTitre"])) != $titre){
							fwrite($lignes, $film);
						}
						else{
							unset($film);
							$filmTrv = true;
							echo "<p>"."Le film a bien été supprimé!"."</p>";
						}
				}
				if($filmTrv==false){
					echo "<p>"."Suppression impossible!"."<br/>" ."Film non rencé!"."</p>";
				}
				fclose($lignes);
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
		<a class="retour" href="http://127.0.0.1/SI6/SI6-Fichiers-texte/saisieTitreSuppression.html"> RETOUR </a> 
		</section>
	</body>
</html>	