<?php



require_once('models/Model.php');
class Event extends Model{
      
      protected $table='events';
      

public function insertEvent(){


$id_event = null;
if (!empty($_POST['id_event'])) {
    // On fait quand même gaffe à ce que le gars n'essaye pas des balises cheloues dans son commentaire
     $nom = htmlspecialchars($_POST['id_event']);
 }


$nom = null;
if (!empty($_POST['nom'])) {
    // On fait quand même gaffe à ce que le gars n'essaye pas des balises cheloues dans son commentaire
    $nom = htmlspecialchars($_POST['nom']);
}
$descriptions= null;
if (!empty($_POST['descriptions'])) {
    // On fait quand même gaffe à ce que le gars n'essaye pas des balises cheloues dans son commentaire
    $descriptions= htmlspecialchars($_POST['descriptions']);
}

$organisateur= null;
if (!empty($_POST['organisateur'])) {
    // On fait quand même gaffe à ce que le gars n'essaye pas des balises cheloues dans son commentaire
    $organisateur= htmlspecialchars($_POST['organisateur']);
}

$lieu= null;
if (!empty($_POST['lieu'])) {
    // On fait quand même gaffe à ce que le gars n'essaye pas des balises cheloues dans son commentaire
    $lieu= htmlspecialchars($_POST['lieu']);
}


$date_debut= null;
if (!empty($_POST['date_debut'])) {
    // On fait quand même gaffe à ce que le gars n'essaye pas des balises cheloues dans son commentaire
    $date_debut= htmlspecialchars($_POST['date_debut']);
}

$date_fin= null;
if (!empty($_POST['date_fin'])) {
    // On fait quand même gaffe à ce que le gars n'essaye pas des balises cheloues dans son commentaire
    $date_fin= htmlspecialchars($_POST['date_fin']);
}

$infoline= null;
if (!empty($_POST['infoline'])) {
    // On fait quand même gaffe à ce que le gars n'essaye pas des balises cheloues dans son commentaire
    $infoline= htmlspecialchars($_POST['infoline']);
}


$photo= null;
if (!empty($_FILES['photo'])) {
    // On fait quand même gaffe à ce que le gars n'essaye pas des balises cheloues dans son commentaire
     $photo= $_FILES['photo'];    
         
}

move_uploaded_file($photo['tmp_name'], '/style/img/'.$nom.'logo.jpg');

$pdo=$this->pdo;
$requette=$pdo->prepare('INSERT INTO events(id_event,nom,descriptions,date_debut,date_fin,organisateur,lieu,infoline,photo) value(?,?,?,?,?,?,?,?,?)');
$requette->execute (array($id_event,$nom,$descriptions,$organisateur,$lieu,$date_debut,$date_fin,$infoline,'../style/img/'.$nom.'logo.jpg')); 


}

public function deleteEvent(int $id){
   
    $query = $this->pdo->prepare("DELETE FROM {$this->table} WHERE id_event = :id");
    $query->execute(['id' => $id]);
    }


function modifier($id,$nom,$descriptions,$date_debut,$date_fin,$organisateur,$lieu,$infoline,$photo){
    $mod=$this->pdo->prepare("UPDATE events SET id_event=:id nom=:nomm,descriptions=:descriptionsm,date_debut=:date_debutm,date_fin=:date_finm,organisateur=:organisateurm,lieu=:lieum,infoline=:infolinem,photo=:photom WHERE id=:id");
    $mod->execute(array(
        "id"=>$id,
        "nomm"=>$nom,
        "descriptionm"=>$descriptions,
        "date_debutm"=>$date_debut,
        "date_finm"=>$date_fin,
        "organisateurm"=>$organisateur,
        "lieum"=>$lieu,
        "infolinem"=>$infoline,
        "photom"=>$photo
      
        ));

    } 
    
    public function findEvent(int $id){
      
    
        $query = $this->pdo->prepare("SELECT * FROM {$this->table} WHERE id_event = :id");
       
       // On exécute la requête en précisant le paramètre :article_id 
       $query->execute(['id' => $id]);
       
       // On fouille le résultat pour en extraire les données réelles de l'article
       $item= $query->fetch();
       
       return $item;
       
       }
}

