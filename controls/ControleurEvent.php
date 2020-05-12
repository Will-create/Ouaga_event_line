<?php
require_once('models/autoload.php');


class ControleurEvent {


      protected $model;
      protected $redirect;
      protected $rendu;
      
      protected $comment;
      


      function __construct(){ 
        $this->model=new Event();
        $this->redirect=new Http();
        $this->rendu=new Render();
     
        $this->comment=new Comment();
      }
      
            

      public function liste(){

      $events=$this->model->findAll();
      $nombres=[];
      foreach ($events as $event) {
      $i=$event['id_event'];
      $nombres[$i]=count($this->comment->findAllByEvent("date_comment desc",$event['id_event']));
      
            }
     $pageTitle="liste des evenements";

     $this->rendu->render('welcome',compact('pageTitle',
        'events','nombres'));
}
      
      

public function detail(){
            //montrer un seul articles
$id = null;
// Mais si il y'en a un et que c'est un nombre entier, alors c'est cool
if (!empty($_GET['id']) && ctype_digit($_GET['id'])) {
    $id= $_GET['id'];
}

// On peut désormais décider : erreur ou pas ?!
if (!$id) {
    die("Vous devez préciser un paramètre `id` dans l'URL !");
}

$event=$this->model->find($id);
$comments=$this->comment->findAllByEvent("date_comment desc",$event['id_event']);

 
 
$pageTitle='Detail de la moto';


$this->rendu->render('detailevent',compact('pageTitle',
  'comments','event'));    
      }
      
      
      
      
     public function form(){
           



 
           $id= null;
// Mais si il y'en a un et que c'est un nombre entier, alors c'est cool
if (!empty($_GET['id']) && ctype_digit($_GET['id'])) {
    $id= $_GET['id'];
}
           
      $this->model->insertMoto();     
       
      $this->redirect->vers('../marque/detail?id='.$id);
           
           
     }
      
      
      
      
      
      
      
      public function delete(){
            //supprimer une moto
            
          
if (empty($_GET['id']) || !ctype_digit($_GET['id'])) {
    die("Ho ?! Tu n'as pas précisé l'id de la moto!");

}
$id = $_GET['id'];

$moto=$this->model->find($id);

if (!$moto) {
    die("La moto $id n'existe pas, vous ne pouvez donc pas la supprimer !");
}

/**
 * 4. s suppression de l'article
 */
 
$this->model->delete($id);

 $id_marque=$moto['id_marque'];
/**
 * 5. Redirection vers la page d'accueil
 */
 
$this->redirect->vers('../marque/detail?id='.$id_marque);


            
      }
      

}

?>


