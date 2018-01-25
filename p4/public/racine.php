	<!-- ROUTEUR ou ( controleur frontal) -->
	<?php
$title = "accueil";


// Autoloader permettant de charger les différentes classes nécessaires à la page.

function autoload($name)
	{
	if (file_exists($file = '../config/' . $name . '.php'))
		{
		require $file;

		}
	elseif (file_exists($file2 = '../models/' . $name . '.php'))
		{
		require $file2;

		}
	}

spl_autoload_register('autoload');

//  affichage des derniers billets

if (isset($_GET['url']))
	{
	if ($_GET['url'] == 'readbillets')
		{
		include ("../controllers/controllerReadBillets.php");

		}

	if ($_GET['url'] == 'login')
		{
		include ("../controllers/controllerLogin.php");

		}
	elseif ($_GET['url'] == 'admin')
		{
		include ("../controllers/controllerAdmin.php");

		}
	elseif ($_GET['url'] == 'maj')
		{

		include ("../controllers/controllerMaj.php");

		}
elseif ($_GET['url'] == 'try_login')
		{
		include ("../controllers/controllerLogin.php");

		}

elseif ($_GET['url'] == 'add_post')
		{
		include ("../controllers/controllerMaj.php");

		}
	}
  else
	{
	include ("../controllers/controllerIndex.php");

	}

include ('../template/footer.php');

?>
	






				



			