


<?php
require_once('models/autoload.php');
class ControleurFormulaire{
      protected $model;
      protected $redirect;
      protected $rendu;
      


      function __construct(){ 
        $this->model=new Event();
        $this->redirect=new Http();
        $this->rendu=new Render();
      }
      
      public function formEvent(){
      
      
      
      $pageTitle='formulaire_Event';
      $entreprise='Ouaga_event_line';
      $this->rendu->render('eventform',compact('pageTitle','entreprise'));    
            
          
       
      }

      public function Event(){
      
      
      
        $pageTitle='form_Event';
        $entreprise='Ouaga_event_line';
        $erreur='';
        $this->rendu->render('Event',compact('pageTitle','entreprise','erreur'));    
              
            
         
        }

      public function login(){
      
      
      
      $pageTitle='formulaire_Login';
      $entreprise='Ouaga_event_line';
      $erreur='';
      $this->rendu->render('login',compact('pageTitle','entreprise','erreur'));    
            
          
       
      }
      public function signin(){
      
      
      
      $pageTitle='formulaire_Login';
      $entreprise='Ouaga_event_line';
      $erreur='';
      $this->rendu->render('signin',compact('pageTitle','entreprise','erreur'));    
            
          
       
      }
      



      public function formMoto(){
      
      $id = null;

// Mais si il y'en a un et que c'est un nombre entier, alors c'est cool
if (!empty($_GET['id']) && ctype_digit($_GET['id'])) {
    $id= $_GET['id'];
}

// On peut désormais décider : erreur ou pas ?!
if (!$id) {
    die("Vous devez préciser un paramètre `id` dans l'URL !");
}

      
      $pageTitle='formulaire_Moto';
      $entreprise='EDIF-WP';
      $id_marque=$id;
      $this->rendu->render('motoform',compact('pageTitle','entreprise','id_marque'));    
            
          
       
      }
      




}


