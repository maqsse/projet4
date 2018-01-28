<!-- controlleur de la page admin avec appel des classes nécessaires à la page -->
<?php
session_start();
include ("../config/Database.php");

include ("../models/Comment.php");

include ("../models/Billet.php");

include ("../models/Admin.php");

$con = new Database;
$con->connect();
$administrateur= new Admin; 
$administrateur = Admin::Administration();
$_SESSION['pseudo'] = $administrateur->pseudo;
$_SESSION['mdp'] = $administrateur->mdp;

// vérification des identifiants
 if((isset($_SESSION['pseudo'])) AND (isset($_SESSION['mdp'])))
{


}
else{
header("location:../racine.php");
}




// affichage des commentaires récemment signalés

$com = new Comment;
$com = Comment::affichSignal();

// Si on appuie sur le bouton supprimer le commentaire est supprimé (aprés confirmation)

if (isset($_GET['action']) && $_GET['action'] == 'del')
	{
	$com = Comment::deleteComment();
	header("location:../racine.php?url=admin");
	}

// Affichage des billets

$ticket = new Billet;
$ticket = Billet::getListe();

// Si on clique sur supprimer le billet est supprimé (aprés confirmation)

if (isset($_GET['action']) && $_GET['action'] == 'delete')
	{
	$ticket = Billet::deleteBillet();
	header("location:../racine.php?url=admin");
	}

// Si on a cliqué sur mise à jour le billet est mis à jour

if (isset($_GET["action"]) == "maj")
	{
	$resultats = Billet::majBillet();
	header("location:../racine.php?url=admin");
	}

// Si on clique sur le bouton envoyer à la suite de l'écriture d'un billet il est inséré dans la base de données

if (isset($_POST["submit"]))
	{
	$ticket = Billet::insertBillet();
	
	}

require ("../vues/admin.php");

