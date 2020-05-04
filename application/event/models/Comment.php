<?php



require_once('models/Model.php');
class Comment extends Model{
      
      protected $table='comments';
      
      
  
 public function test(){
        echo 'Vous etes aux commentaires';
      }
public function findComment(int $id){
      
    
 $query = $this->pdo->prepare("SELECT * FROM {$this->table} WHERE id_{$this->table} = :id");

// On exécute la requête en précisant le paramètre :article_id 
$query->execute(['id' => $id]);

// On fouille le résultat pour en extraire les données réelles de l'article
$item= $query->fetch();

return $item;

}
public function findAllByEvent($id_event):array{
      
 $query = $this->pdo->prepare("SELECT * FROM comments WHERE id_event= :id_event");
$query->execute(['id_event' => $id_event]);
$comments = $query->fetchAll();

      
      return $comments;
}

public function insertComment(){
      
      




$id_event = null;
if (!empty($_POST['id_event'])) {
    // On fait quand même gaffe à ce que le gars n'essaye pas des balises cheloues dans son commentaire
    $id_event = htmlspecialchars($_POST['id_event']);
}

$pseudo= null;
if (!empty($_POST['pseudo'])) {
    // On fait quand même gaffe à ce que le gars n'essaye pas des balises cheloues dans son commentaire
    $pseudo= htmlspecialchars($_POST['pseudo']);
}

$email= null;
if (!empty($_POST['email'])) {
    // On fait quand même gaffe à ce que le gars n'essaye pas des balises cheloues dans son commentaire
    $email= htmlspecialchars($_POST['email']);
}


$date_debut= null;
if (!empty($_POST['date_debut'])) {
    // On fait quand même gaffe à ce que le gars n'essaye pas des balises cheloues dans son commentaire
    $date_debut= htmlspecialchars($_POST['date_debut']);
}

$date_comment= null;
if (!empty($_POST['date_comment'])) {
    // On fait quand même gaffe à ce que le gars n'essaye pas des balises cheloues dans son commentaire
    $date_comment= htmlspecialchars($_POST['date_comment']);
}

$content= null;
if (!empty($_POST['content'])) {
    // On fait quand même gaffe à ce que le gars n'essaye pas des balises cheloues dans son commentaire
    $content= htmlspecialchars($_POST['content']);
}






  $pdo=getpdo();
$requette=$pdo->prepare('INSERT INTO comment(id_event,pseudo, email, date_comment,content,) value(?,?,?,?,?)');
$requette->execute (array($id_event,$pseudo,$email,$date_comment,$content)); 






}
  
}