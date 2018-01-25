<?php 
// Fonction pour l'affichage des billets sur la page d'accueil, elle permet de lire un extrait.
function coupeChaine($chaine, $nbMaxCaracteres = 300) 
{
	if (strlen($chaine) > $nbMaxCaracteres) {
		while ($chaine{$nbMaxCaracteres} != ' ') {
			$nbMaxCaracteres++;
		}
		return substr($chaine, 0, $nbMaxCaracteres);
	}
	else {
		return $chaine;
	}
}

//fonction pour les cas où les  identifiants sont mauvais pour se connecter à l'administration
function error(){
if (isset($_GET["error"])==2) {

	echo "<p id='perror'>mauvais identifiants </p>";
}
}