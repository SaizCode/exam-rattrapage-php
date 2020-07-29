<?php


require "commentaireManager.php";
require "commentaire.php";

class commentaireManagerPDO extends commentaireManager
{
  
  protected $db;
  

  public function __construct(PDO $db)
  {
    $this->db = $db;
  }
  
  
  public function add(Commentaire $comment)
  {
    $requete = $this->db->prepare("INSERT INTO comment(name, email, pageAcc, comment, textFormat) VALUES(:name, :email, :pageAcc, :comment, :textFormat)");
    
    $requete->bindValue(':name', $comment->getName());
    $requete->bindValue(':email', $comment->getEmail());
    $requete->bindValue(':comment', $comment->getComment());
    $requete->bindValue(':pageAcc', $comment->pageAcc());
    $requete->bindValue(':textFormat', $comment->getTextFormat());
       
    try {
        $requete->execute();
    } catch (PDOException $th) {
        
        die(var_dump($th));
    }
    
    
  }
  
  public function getList($debut = -1, $limite = -1)
  {
    $sql = 'SELECT name, email, comment, textFormat FROM comment ORDER BY id DESC';
    
    
    if ($debut != -1 || $limite != -1)
    {
      $sql .= ' LIMIT '.(int) $limite.' OFFSET '.(int) $debut;
    }
    
    $requete = $this->db->query($sql);
    $requete->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Commentaire');
    
    $listeComment = $requete->fetchAll(PDO::FETCH_CLASS, "Commentaire");
    
    $requete->closeCursor();
    
    return $listeComment;
  }

}