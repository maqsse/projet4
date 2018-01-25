    <?php 
    $title= "Lecture du billet";
    include('../template/layout.php');
      include('../template/header.php');


      ?>
    
    <!-- La section core qui est constituée du contenu principal de la page -->
    <section class="core " >
      
      <!-- lecture du billet selectionné  avec ses commentaires et bouton pour pouvoir signaler un commentaire-->
      
      <div class="container-fluid" id="divbillets">
        <!-- On affiche le titre du billet -->
        <?php
        ob_start();
        echo "<p id='pundivbillets'>  titre du billet: " .$_GET["titre"]. " écrit par Jean Forteroche</p>";
        // on récupère le billet 
        
       
        
        foreach($resultat as $data=>$contenu)
        {
          
        echo "<p>" .($contenu->getContenu()). "</p>";
        echo "<br>";
        }
        ?>
        <!-- on récupère les commentaires du billet avec le bouton signaler-->
        <div class="divvide">
          
        </div>
        <h5>Commentaire(s):</h5><br>
        <?php
        
       
        
        
        
        foreach($resultats as $data=>$contenu)

        {
        ?>
      </div>
      <div class="container-fluid" id="divcom">
        
        <?php
        echo "<p >" .($contenu->getPseudo()). " >> "  .($contenu->getContenu()). " le " .date("d/m/Y", strtotime($contenu->getDate())). "</p>";?>
        
        <p id="pcomappropri">Ce commentaire ne vous semble pas approprié? Vous pouvez le signaler à l'administrateur en cliquant sur ce bouton: </p>
        <button class="btn btn-primary btn-sm active" role="button" aria-pressed="true"
        id="signalbutton"><a href="../racine.php?url=readbillets&action=1&id=<?php echo($contenu->getId());?>&titre=<?php echo($_GET['titre']);?>"  id="signalbutton" title="Cliquez pour signaler ce commentaire" class="btn btn-primary btn-sm active" role="button" aria-pressed="true" onclick="if(!confirm('Etes-vous sûr de signaler ce commentaire?')) return false;">Signaler</a></button><br>
      </div>
      <?php
      }
      ob_end_flush();
      ?>
      
      <!-- petit formulaire pour poster un commentaire -->
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-7 offset-md-5" id="divbutton">
            <button id="poster_com"> Poster un commentaire </button>
          </div>
        </div>
      </div>
      
      <div class="container-fluid" >
        <p>Pour envoyer un commentaire au sujet du billet il vous suffit de remplir les champs de ce petit formulaire. Par la suite vous serez redirigé automatiquement à la page d'accueil du site.</p>
        <form action="#" method="post" accept-charset="utf-8" id="formcom">
          <div class="form-group row">
            
            <div class="col-sm-8 offset-sm-2">
              <input type="text" name="titre" class="form-control" id="titre" readonly="readonly" value="<?php echo $_GET["titre"]?>">
            </div>
          </div>
          <div class="form-group row">
            
            <div class="col-sm-8 offset-sm-2">
              <input type="text" name="pseudo" class="form-control" id="pseudo" placeholder="votre pseudo" required="required">
            </div>
          </div>
          <div class="form-group row">
            
            <div class="col-sm-8 offset-sm-2">
              <textarea name="commentaire" class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="votre commentaire"
              required="required"></textarea>
            </div>
          </div>
          <div class="form-group row">
            
            <div class="col-sm-8 offset-sm-2">
              <input type="date" name="date" class="form-control" id="date" required="required">
              
              <button type="submit" name="envoyer" class="btn btn-primary"  id="submit" title="Envoyer">Envoyer</button>
            </div>
          </div>
        </form>
        <a href="racine.php" title="">Retour à l'accueil</a>
      </div>
    </section>
    
    </body>
  </html>