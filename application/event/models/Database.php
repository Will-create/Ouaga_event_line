<?php
/**
 * 
 * retourne une connexion PDO a la base de donnée
 * @return PDO
 * */
 

function getpdo()
{
  
  
$pdo = new PDO('mysql:host=localhost;dbname=event', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
]);

return $pdo;
  
}









      
    
  
  
  
   


     
     
     
     
     
     
     
     
     
      



















