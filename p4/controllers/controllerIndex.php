<!-- Controller de la page index.php -->
<?php
$con = new Database;
$con->connect();
$resultats = new Billet;
$resultats = Billet::getAllBillet();
include ("../vues/Viewindex.php");





 

