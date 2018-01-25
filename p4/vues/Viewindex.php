<?php 
    include('../template/layout.php');
    include('../template/header.php');		
			?>
			
			<!-- une section "core" dans laquelle on a le corps de la page avec un petit paragraphe de présentation. On peut y lire les  billets. Quand on clique sur un billet on accède à la page qui le contient avec ses commentaires-->
			<section class="core">
				
				<div class="col-md-8 offset-md-2 ">
					<p>Pour mon nouveau roman, 'Billet simple pour l'Alaska', j'ai décidé d'utiliser une nouvelle forme de publication. Régulièrement, vous retrouverez sur ce blog un nouvel épisode. N'hésitez pas à commenter pour me donner vos impressions, vos idées pour la suite, ce qui vous a plu ou non, j'essaierai d'en tenir compte pour l'épisode suivant!</p>
				</div>
				<!-- affichage des  billets.  -->
				
				<?php


				include("fonctions.php");

		
				// affichage des billets
				
				foreach($resultats as $data=>$contenu)
				{
				?>
				
				<div  id="divindex" class="container-fluid">
					<a href="../racine.php?url=readbillets&titre=<?php echo ($contenu[1]);?>&id=<?php echo ($contenu[0]);?>">
						<?php  echo "<p>".($contenu[1])."</p>";?></a>
					
					<?php
					echo "<p id='ptitre'>" .coupeChaine($contenu[2]). "...</p><br>";?>
					<a href="../racine.php?url=readbillets&titre=<?php echo ($contenu[1]);?>&id=<?php echo ($contenu[0]);?>"
					id="liensuite"	title="Cliquez pour lire la suite">
					(lire la suite) </a>
					<?php echo "<p id='pdate'>publié le " .date("d/m/Y", strtotime($contenu[4])). "</p>";
					?>
					
				</div>
				
				<?php 
			}
				?>
				
			</section>

			
			
			
		