<?php

// Vérification de la présence des fichiers nécessaires et instanciations. -->

include ("../config/Database.php");
include ("../models/Billet.php");

$con = new Database;
$con->connect();
$ticket = new Billet;
$ticket = Billet::getBillet();

// Si on a cliqué sur le bouton envoyer aprés modification du billet il est mis à jour

if (isset($_POST["submit"]))
	{

	$ticket = Billet::majBillet();
	header("location:../racine.php?url=admin");
	}

include ('../vues/maj.php');
