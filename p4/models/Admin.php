<!-- Classe qui permet de se connecter à la base de données et de sélectionner le contenu de la table admin -->
<?php
class Admin

	{
	private  $pseudo;
	private  $mdp;


	


static function Administration()
		{
			
$resultats=Database::getBdd()->query("SELECT * FROM blog_admin");
    $contenu = $resultats->fetch(PDO::FETCH_OBJ);
return $contenu;
 				
		}
	 

    
}

