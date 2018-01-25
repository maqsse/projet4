<!-- vérif du login pour se connecter au panneau d'administration-->
<?php
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
		header('location:../racine.php?url=admin');
		}
	  else
		{
var_dump($administrateur);
		//header('location:../racine.php?url=login');
		}
	}

require ("../vues/login.php");

?>	