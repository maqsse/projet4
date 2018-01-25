<!-- controleur de la page readBillets -->
<?php
$con = new Database;
$con->connect();

// quand on clique sur un billet

$resultat = new Billet;
$resultat = Billet::getBillet();

// commentaires du titre cliqué

$resultats = new Comment;
$resultats = Comment::getComment();

// laisser un commentaire

if (isset($_POST["envoyer"]))
	{
	$com = Comment::letComment();
	header('Location:../racine.php');
	}

// mise à jour de l'index signalement quand on clique sur le bouton signaler

$com = new Comment;
$com->updateSignal();
include ('../vues/readbillets.php');


 
