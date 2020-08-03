<?php



class Commentaire{

    private $name;
    private $id;
    private $email;
    private $pageAcc = "Accueil";
    private $comment;
    private $textFormat;

    private $errors = [];

  const NAME_INVALIDE = 1;
  const EMAIL_INVALIDE = 2;
  const COMMENT_INVALIDE = 3;
 

    public function __construct($valeurs = [])
    {
      if (!empty($valeurs)) 
      {
        $this->hydrate($valeurs);
      }
    }




    public function isNewComment()
    {
        return empty($this->id);
    }


    public function isValid()
    {
        return !(empty($this->name) || empty($this->email) || empty($this->comment));
    }



    public function hydrate($donnees)
    {
      foreach ($donnees as $attribut => $valeur)
      {
        $methode = 'set'.ucfirst($attribut);
        
        if (is_callable([$this, $methode]))
        {
          $this->$methode($valeur);
        }
      }
    }  

   public function setId($id)
  {
    $this->id = (int) $id;
  }
  
  public function setName($name)
  {
    if (!is_string($name) || empty($name))
    {
      $this->errors[] = self::NAME_INVALIDE;
    }
    else
    {
      $this->name = $name;
    }
  }
  
  public function setEmail($email)
  {
    if (!is_string($email) || empty($email))
    {
      $this->errors[] = self::EMAIL_INVALIDE;
    }
    else
    {
      $this->email = $email;
    }
  }
  
  public function setComment($comment)
  {
    if (!is_string($comment) || empty($comment))
    {
      $this->errors[] = self::COMMENT_INVALIDE;
    }
    else
    {
      $this->comment = $comment;
    }
  }


  public function setTextFormat($format){

    $this->textFormat = $format;
  }


  public function getName(){

    return $this->name;
  }

  public function getEmail(){

    return $this->email;
  }

  public function getComment(){

    return $this->comment;
  }

  public function getTextFormat(){

    return $this->textFormat;
  }

  public function pageAcc(){

    return $this->pageAcc;
  }

  public function getErrors(){

    return $this->errors;
  }



}