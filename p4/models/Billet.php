<!-- Classe qui gère la table des billets blog_billet -->
<?php
class Billet

    {
    private $titre;
    private $contenu;
    private $auteur;
    private $date;

    // recupération liste des  derniers billets

    static
    function getListe()
        {
        $resultats = Database::getBdd()->query("SELECT * FROM blog_billets order by date desc LIMIT 5");
        return $resultats;
        }

    // récupérer l'ensemble des billets

    static
    function getAllBillet()
        {
        $resultats = Database::getBdd()->query("SELECT * FROM blog_billets order by date desc ");
        return $resultats;
        }

    // récupération d'un billet en particulier en fonction du titre

    static
    function getBillet()
        {
        if (isset($_GET['titre']))
            {
            $titre = str_replace("'", "\'", $_GET["titre"]);
            }
          else
            {
            $titre = str_replace("'", "\'", $_GET["titre"]);
            }

        $resultat = Database::getBdd()->prepare('SELECT contenu FROM blog_billets WHERE titre= :titre');
        $resultat->bindValue(':titre', $titre);
        $resultat->execute();
        $contenu = $resultat->fetchAll(PDO::FETCH_CLASS, "Billet");
        $resultat->closeCursor();
        return $contenu;
        }

    // insertion des billets

    static
    function insertBillet()
        {
        $tab = array(
            ':titre' => htmlspecialchars($_POST['titre']) ,
            ':comment' => strip_tags($_POST['comment']) ,
            ':auteur' => htmlspecialchars($_POST['auteur']) ,
            ':date' => htmlspecialchars($_POST['date'])
        );
        $req = Database::getBdd()->prepare('INSERT INTO blog_billets (titre, contenu, auteur, date) VALUES (:titre, :comment,
:auteur, :date)');
        $req->execute($tab);
        $req->closeCursor();
        }

    // suppression d'un billet

    static
    function deleteBillet()
        {
        $id = $_GET["id"];
        $resultats = Database::getBdd()->prepare('DELETE FROM blog_billets WHERE id=:id');
        $resultats->bindValue(':id', $id);
        $resultats->execute();
        }

    // mise à jour des billets

    static
    function majBillet()
        {
        $tab = array(
            ':titre' => htmlspecialchars($_GET['titre']) ,
            ':comment' => strip_tags($_POST['comment'])
        );
        
        $resultats = Database::getBdd()->prepare('UPDATE blog_billets SET contenu= :comment WHERE titre= :titre');
        $resultats->execute($tab);
        $resultats->closeCursor();
        }

    /**
     * @return mixed
     */
    public

    function getTitre()
        {
        return $this->titre;
        }

    /**
     * @param mixed $titre
     *
     * @return self
     */
    public

    function setTitre($titre)
        {
        $this->titre = $titre;
        return $this;
        }

    /**
     * @return mixed
     */
    public

    function getContenu()
        {
        return $this->contenu;
        }

    /**
     * @param mixed $contenu
     *
     * @return self
     */
    public

    function setContenu($contenu)
        {
        $this->contenu = $contenu;
        return $this;
        }
    }

?>
