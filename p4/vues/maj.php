<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mise à jour</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <!-- tinymce -->
    <script src="//cloud.tinymce.com/stable/tinymce.min.js?apiKey=fzxs7q2usg4lvi36shaqwszm97smnt7e6nn7m0lj54uyzyhq"></script>
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea' });</script>
    <!-- police d'écriture google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Archivo+Black" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Passion+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
  </head>
  <body>
    <header id="header" class="col-md-12">
      
      <p>Mise à jour</p>
    </header>
    <div class="container-fluid">
      <?php
    
      // modification du billet
      
      ?>
      <div>
      <form id="form1" method="POST" action="racine.php?url=maj">
        
          <input name="titre" type="texte" readonly="readonly" value="<?php echo ($_GET['titre']);?>"><br>
          <textarea name="comment" id="comment" required="required" rows="15"><?php foreach($ticket as $data=>$contenu)
          {echo ($contenu->getContenu());}?></textarea>
          <input name="submit" type="submit" Value="envoyer" /></div>
     </form>
      </div>
      <a href="../racine.php" title="se deconnecter" value="<?php session_destroy();?>" class="liensmaj">se deconnecter</a>
      <a href="../racine.php?url=admin" title="administration" class="liensmaj">Administration</a>
    </body>
  </html>