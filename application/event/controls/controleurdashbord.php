<?php
require_once('models/autoload.php');


class ControleurDashbord {


      protected $model;
      protected $redirect;
      protected $rendu;
      

       function __construct(){ 
        $this->model=new Event();
        $this->redirect=new Http();
        $this->rendu=new Render();
      }
      
            

      public function liste(){

    $events=$this->model->findAll();
  
      foreach ($events as $event) {
    $i=$event['id_event'];
      
            }
     $pageTitle="liste des evenements";

     $this->rendu->render('eventform',compact('pageTitle',
        'events'));
}

public function form(){
           

$this->model->insertEvent();     

$this->redirect->vers('../dashbord/liste'.$id);
    
    
}

    
public function delete(){
    //supprimer une moto
    
  
if (empty($_GET['id']) || !ctype_digit($_GET['id'])) {
die("Ho ?! Tu n'as pas précisé l'id de l'event!");

}
$id = $_GET['id'];

if (!$id) {
die("l'event $id n'existe pas, vous ne pouvez donc pas la supprimer !");
}



/**
* 4. s suppression de l'article
*/

$this->model->deleteEvent($id);

/**
* 5. Redirection vers la page d'accueil
*/

$this->redirect->vers('../dashbord/liste');
    
     

}

public function modifierEvent(){
  if (empty($_GET['id']) || !ctype_digit($_GET['id'])) {
    die("Ho ?! Tu n'as pas précisé l'id de l'event!");
  
    }
    $id=$_GET['id'];
  $event=$this->model->findEvent($id);

  $this->rendu->render('modifier',compact('event'));
 }

 public function edit(){
  $event=$this->model;
 if (isset($_POST)) {
  $event->modifier($_POST['id_event'],$_POST['nom'],$_POST['descriptions'],$_POST['date_debut'],$_POST['date_fin'],$_POST['organisateur'],
  $_POST['lieu'],$_POST['infoline'],$_POST['photo']);
  header('location:../dashbord/liste');

}
}


public function logout(){

    header('Location: ../dashbord/liste');


  }


} 

