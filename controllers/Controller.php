<?php


require_once "..\libs\DBFactory.php";
require_once "..\models\commentaireManagerPDO.php";
require_once "..\models\commentaire.php";






$db = DBFactory::getMysqlConnexionPDO();
$manager = new commentaireManagerPDO($db);



if(!empty($_POST)){


    $comment = new Commentaire($_POST);
   
   if(!$comment->isValid()){
        
        header("Location:../views/commentaire/commentaire.php");
        exit("Erreur");
   }
   else{

        $manager->add($comment);
        header("Location:../views/index.php");
   }

}
