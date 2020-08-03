<?php


require_once "..\libs\DBFactory.php";
require_once "..\models\commentaireManagerPDO.php";
require_once "..\models\commentaire.php";

session_start();



$_SESSION["errors"] = [];




$db = DBFactory::getMysqlConnexionPDO();
$manager = new commentaireManagerPDO($db);



if(!empty($_POST)){


    $comment = new Commentaire($_POST);

   
   if(!$comment->isValid()){
        
        
        if($comment->getErrors()[0] == 1){

          $_SESSION["errors"][0] = "Le nom n'est pas correcte";
        }
        if($comment->getErrors()[1] == 2){

          

          $_SESSION["errors"][1] = "Le mail n'est pas correcte";
        }

        header("Location:../views/commentaire/commentaire.php");
       
   }
   else{

        $manager->add($comment);
        header("Location:../views/index.php");
   }

}
