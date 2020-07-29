
<?php
abstract class CommentaireManager
{
  
  abstract public function add(Commentaire $comment);
  
  
  abstract public function getList($debut = -1, $limite = -1);
  
  
  
}