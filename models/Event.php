<?php



require_once('models/Model.php');
class Event extends Model{
      
      protected $table='event';
      

public function insertEvent(){
      
$nom = null;
if (!empty($_POST['nom'])) {
    // On fait quand même gaffe à ce que le gars n'essaye pas des balises cheloues dans son commentaire
    $nom = htmlspecialchars($_POST['nom']);
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


move_uploaded_file($photo['tmp_name'], '/style/img/'.$model.'logo.jpg');


  $pdo=getpdo();
$requette=$pdo->prepare('INSERT INTO moto(id_marque,model, cylindre, stock,prix,photo) value(?,?,?,?,?,?)');
$requette->execute (array($id_marque,$model,$cylindre,$stock,$prix,'../style/img/'.$model.'logo.jpg')); 






}
  
}