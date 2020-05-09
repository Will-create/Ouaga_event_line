<?php


require_once('models/Database.php');


abstract class Model{
      
   protected $pdo;
   
   protected $table;
      
      public function __construct(){
      
            $this->pdo=Database::getpdo();
            
      }
      
public function find(int $id){
      
    
 $query = $this->pdo->prepare("SELECT * FROM {$this->table} WHERE id_{$this->table} = :id");

// On exécute la requête en précisant le paramètre :article_id 
$query->execute(['id' => $id]);

// On fouille le résultat pour en extraire les données réelles de l'article
$item= $query->fetch();

return $item;

}


public function delete(int $id){
   
$query = $this->pdo->prepare("DELETE FROM {$this->table} WHERE id_{$this->table} = :id");
$query->execute(['id' => $id]);
}

public function findAll(?string $order=""){
      
      $sql="SELECT * FROM {$this->table} ";
     if ($order){
           $sql= $sql.' ORDER BY '.$order;
     }
  
  $resultats = $this->pdo->query($sql);
// On fouille le résultat pour en extraire les données réelles
$items= $resultats->fetchAll();


return $items;
}




}