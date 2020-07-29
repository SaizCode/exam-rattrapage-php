<?php

class Autoload{

  private $path;

  public function __construct($path){

    $this->path = $path;
  }
  public function register(){

    spl_autoload_register(array($this, 'load'));
  }

  public function load($classname){

    if (file_exists($file = $this->path . '/' . $classname . '.php')){
     
      
      require $file;
    }

    else{
       die("Ici mauvais fichier: ".$file);
    }
  }


}