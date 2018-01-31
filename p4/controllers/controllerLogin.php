<!-- vérif du login pour se connecter au panneau d'administration-->
<?php
session_start();
include ("../config/Database.php");

include ("../models/Admin.php");

$con = new Database;
$con->connect();
$administrateur = new Admin;
$administrateur = Admin::Administration();

if (isset($_POST["submit"]))
	{

	$pseudo = $_POST['pseudo'];
	$mdp = $_POST['password'];
	
	if ($administrateur->pseudo == $pseudo and $administrateur->mdp ==sha1($mdp))
		{
		$_SESSION['pseudo'] = $administrateur->pseudo;
        	$_SESSION['mdp'] = $administrateur->mdp;
		header('location:../racine.php?url=admin');
		}
	  else
		{

		header('location:../racine.php?url=login');
		}
	}

require ("../vues/login.php");

?>	
