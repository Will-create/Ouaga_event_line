<?php



require_once('models/Model.php');
class Admin extends Model{
      
      protected $table="admin";
      
     

  
      
 public function verif(){

    if(isset($_POST['email']) AND isset($_POST['password']))
    {
        $email=htmlspecialchars($_POST['email']);
        $pwd=md5(htmlspecialchars($_POST['password']));
            $requette =$this->pdo->prepare('SELECT * FROM admin WHERE email =:email AND password =:pwd ');
            $requette->execute(array('email'=>$email, 'pwd'=>$pwd));
            $resp=$requette->fetch();
            if($resp)
            {
                  
                return 'ok';
            }
            else
            {
                $erreur="mot de passe ou nom d'utilisateur incorect";
                return $erreur;
            }
    }  
    }  

    public function emailverif(){

        if(isset($_POST['email']))
        {
            $email=htmlspecialchars($_POST['email']);
                $requette =$this->pdo->prepare('SELECT * FROM admin WHERE email =:email');
                $requette->execute(array('email'=>$email));
                $resp=$requette->fetch();
                if($resp)
                {
                      
                    return 'ok';
                }
        }  
        }  
    

  public function insertAdmin(){
      
      

$nom = null;
if (!empty($_POST['nom'])) {
    // On fait quand même gaffe à ce que le gars n'essaye pas des balises cheloues dans son commentaire
    $nom = htmlspecialchars($_POST['nom']);
}

$prenom= null;
if (!empty($_POST['prenom'])) {
    // On fait quand même gaffe à ce que le gars n'essaye pas des balises cheloues dans son commentaire
    $prenom= htmlspecialchars($_POST['prenom']);
}

$email= null;
if (!empty($_POST['email'])) {
    // On fait quand même gaffe à ce que le gars n'essaye pas des balises cheloues dans son commentaire
    $email= htmlspecialchars($_POST['email']);
}


$password= null;
if (!empty($_POST['password'])) {
    // On fait quand même gaffe à ce que le gars n'essaye pas des balises cheloues dans son commentaire
    $password= htmlspecialchars($_POST['password']);
     $password=md5($password);
}



  $pdo=$this->pdo;
$requette=$pdo->prepare('INSERT INTO admin(nom, prenom, email,password) value(?,?,?,?)');
$requette->execute (array($nom,$prenom,$email,$password)); 






}


 
 
 
 
 
   

   
}