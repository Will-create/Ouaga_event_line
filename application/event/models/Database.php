<?php

class Database{
    private $pdo;
    public function __Construct(){
        $this->pdo=$this->getpdo();
    }


    /**
 * 
 * retourne une connexion PDO a la base de donnée
 * @return PDO
 * */
 

public static function getpdo()
{
  
  
$pdo = new PDO('mysql:host=localhost;dbname=event', 'root', '', [
    /*retour de message d'erreur*/
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
]);

return $pdo;
  
}


}







      
    
  
  
  
   


     
     
     
     
     
     
     
     
     
      



















