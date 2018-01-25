<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Connexion à l'administration</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
		<link rel="stylesheet" href="../style.css">
		<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=El+Messiri" rel="stylesheet">
		
	</head>
	<body>
		<div class="container-fluid">
			<header id="headerLogin">
				<p>Connexion à l'administration</p>
			</header>
		</div>
		<section class="core">
			<div class="container-fluid">
				<div id="plogin">
					<p>
						
						Seul l'administrateur du site possède les informations pour se connecter au panneau d'administration. En tant qu'utilisateur cet accès ne vous est pas autorisé. Merci pour votre compréhension.
					</p>
				</div>

				<!-- formulaire de connexion au panneau d'adminsitration avec les identifiants pseudo et mot de passe -->
				
				<div class="container-fluid">
					<form action="racine.php?url=try_login" method="post" id="formlogin">
						<div class="form-group">
							<label for="pseudo">Pseudo</label>
							<input type="text" class="form-control" id="pseudo" name="pseudo" placeholder="pseudo" required="required">
						</div>
						<div class="form-group">
							<label for="Pass">Mot de passe</label>
							<input type="password" class="form-control" id="Pass" name="password" placeholder="mot de passe" required="required">
						</div>
						<button type="submit" class="btn btn-primary" name="submit">connexion</button>
					</form>
					
				 	
				 	


				
				</div>


			</div>
		</section>
		
		
			<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
		</body>
	</html>