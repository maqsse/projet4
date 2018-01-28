<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Administration</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
		<link rel="stylesheet" href="../style.css">
		<script src="//cloud.tinymce.com/stable/tinymce.min.js?apiKey=fzxs7q2usg4lvi36shaqwszm97smnt7e6nn7m0lj54uyzyhq"></script>
		<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
		<script>tinymce.init({ selector:'textarea' });</script>
		<!-- police d'écriture google fonts -->
		<link href="https://fonts.googleapis.com/css?family=Archivo+Black" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Passion+One" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
		
	</head>
	<body>
		
		
		<div  class="container-fluid">
			<header id="headerAdmin" class="col-md-12">
				
				
				<p>Administration</p>
			</header>
			
		</div>
		<section class="core">
			<div class="container-fluid">
				<div class="admin">
					<!-- tableau pour l'administration  avec éventuellement les commentaires récemment signalés suppression commentaires et insertion billets-->
					
<?php


					foreach($com as $data=>$contenu)

					{
					?>
					
					
					<table class="table">
						<thead>
							<tr>
								<th scope="col">Commentaire récemment signalé</th>
								<th scope="col">contenu</th>
								<th scope="col">signalement</th>
								<th scope="col">action</th>
							</tr>
						</thead>
						
						<?php
						echo "<br>";
						?>
						<tbody>
							<th scope="col"><?php echo "<p>" .($contenu[0]). "</p>";?></th>
							<th scope="col"><?php echo "<p id='ptable'>" .($contenu[3]). "</p>";?></th>
							<th scope="col"><?php echo "<p>" .($contenu[5]). "</p>";?></th>
							<th scope="col"><a href="../racine.php?url=admin&action=del&id=<?php echo ($contenu[0]);?>" 
								onclick="if(!confirm('Etes-vous sûr de vouloir supprimer ce commentaire?')) return false;">*supprimer*</a></th>
						</tbody>
					</table>
					
					<?php
					}
					
					?>
				</div>
			</div>
			
			<!-- editeur tinymce pour écrire de nouveaux billets -->
			
			<h2>Ecrire un nouveau billet</h2>
			
			<form id="form1" method="post" action="racine.php?url=admin">
				<div>
					<label>titre</label><br>
					<input name="titre" type="texte" required="required" /><br>
					<label>contenu du billet</label><br>
					<textarea name="comment" id="comment" rows="10"></textarea>
					<br />
					<label>auteur</label><br>
					<input name="auteur" type="texte" readonly="readonly" placeholder="Jean Forteroche" value="Jean Forteroche" /><br>
					<label>date</label><br>
					<input name="date" type="date"  /><br>
					<input name="submit" type="submit" Value="envoyer" id="submit" />
				</div>
			</form><br>
			<!-- affichage de l'ensemble des billets avec possibilité de supprimer un billet (avec demande de confirmation) et mise à jour -->
			<?php
			
			
			foreach($ticket as $data=>$contenu)
			{

			?>
			<div  id="divindex" class="container-fluid">
				<p> <?php echo ($contenu[1]);?></p>
				<?php
				
				
				echo "<p>" .($contenu[2]). "</p><br>";
				?>
				
				<a href="../racine.php?url=admin&action=delete&titre=<?php echo ($contenu[1]);?>&id=<?php echo ($contenu[0]);?>" 
				 onclick="if(!confirm('Etes-vous sûr de vouloir supprimer ce billet?')) return false;">
				supprimer </a>
				 <a href="../racine.php?url=maj&action=maj&titre=<?php echo ($contenu[1]);?>&id=<?php echo ($contenu[0]);?>" id="lienMaj">
				mettre à jour </a> 
			</div>
			<?php
			echo "<br>";
			}
			?>
			<a href="../racine.php?url=admin&action=disconnect" value="<?php  session_destroy();?>">Se déconnecter</a>
			<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
		</section>
	</body>
</html>
