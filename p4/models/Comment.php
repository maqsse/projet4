<!-- Classe qui gère la table des commentaires blog_comment -->
<?php
class Comment

    {
    private $id;
    private $titre;
    private $pseudo;
    private $contenu;
    private $date;
    private $signalement;

    // suppression d'un commentaire signalé

    static
    function deleteComment()
        {
        $id = $_GET["id"];
        $resultats = Database::getBdd()->prepare('DELETE FROM blog_com WHERE id= :id');
        $resultats->bindValue(':id', $id);
        $resultats->execute();
        }

    // liste des commentaires liés à un billet et bouton signalement

    static
    function getComment() // passer en parametre le titre et à l'endroit demandé
        {
        if (isset($_GET['titre']))
            {
            $titre = str_replace("'", "\'", $_GET["titre"]);
            }
          else
            {
            $titre = str_replace("'", "\'", $_POST["titre"]);
            }

        $resultats = Database::getBdd()->prepare('SELECT id,pseudo,contenu,date FROM blog_com WHERE titre= :titre order by date desc');
        $resultats->bindValue(':titre', $titre);
        $resultats->execute();
        $contenu = $resultats->fetchAll(PDO::FETCH_CLASS, "COMMENT");
        $resultats->closeCursor();
        return $contenu;
        }

    // affichage des commentaires récemment signalés

    static
    function affichSignal()
        {
        $resultats = Database::getBdd()->query("SELECT * FROM blog_com WHERE signalement= 1 ");
        return $resultats;
        }

    // poster un commentaire

    static
    function letComment()
        {
        $tab = array(
            ':titre' => htmlspecialchars($_POST['titre']) ,
            ':pseudo' => htmlspecialchars($_POST['pseudo']) ,
            ':commentaire' => htmlspecialchars($_POST['commentaire']) ,
            ':date' => $_POST['date']
        );
        $req = Database::getBdd()->prepare('INSERT INTO blog_com (titre,pseudo, contenu, date)
VALUES (:titre, :pseudo, :commentaire, :date)');
        $req->execute($tab);
        $req->closeCursor();
        }

    // mise à jour de l'index ( 1 pour signalement )  quand un commentaire est signalé

    static public

    function updateSignal()
        {
        $tab = array(
            ':id' => ($_GET['id'])
        );
        $resultats = Database::getBdd()->prepare('UPDATE blog_com SET signalement=1 WHERE id= :id');
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

    function getPseudo()
        {
        return $this->pseudo;
        }

    /**
     * @param mixed $pseudo
     *
     * @return self
     */
    public

    function setPseudo($pseudo)
        {
        $this->pseudo = $pseudo;
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

    /**
     * @return mixed
     */
    public

    function getDate()
        {
        return $this->date;
        }

    /**
     * @param mixed $date
     *
     * @return self
     */
    public

    function setDate($date)
        {
        $this->date = $date;
        return $this;
        }

    /**
     * @return mixed
     */
    public

    function getSignalement()
        {
        return $this->signalement;
        }

    /**
     * @param mixed $signalement
     *
     * @return self
     */
    public

    function setSignalement($signalement)
        {
        $this->signalement = $signalement;
        return $this;
        }

    /**
     * @return mixed
     */
    public

    function getId()
        {
        return $this->id;
        }

    /**
     * @param mixed $signalement
     *
     * @return self
     */
    public

    function setId($id)
        {
        $this->id = $id;
        return $this;
        }
    }

?>
