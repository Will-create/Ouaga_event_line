


<?php
require_once('models/autoload.php');
class ControleurFormulaire{
      protected $model;
      protected $redirect;
      protected $rendu;
      


      function __construct(){ 
        $this->model=new Admin();
        $this->redirect=new Http();
        $this->rendu=new Render();
      }
      
      public function formMarque(){
      
      
      
      $pageTitle='formulaire_marque';
      $entreprise='EDIF-WP';
      $this->rendu->render('markform',compact('pageTitle','entreprise'));    
            
          
       
      }
      public function login(){
      
      
      
      $pageTitle='formulaire_Login';
      $entreprise='EDIF-WP';
      $erreur='';
      $connect='';
      $this->rendu->render('login',compact('pageTitle','entreprise','erreur','connect'));    
            
          
       
      }
      public function signin(){
      
      
      
      $pageTitle='formulaire_Login';
      $erreur=null;
      $connect='';
      $this->rendu->render('signin',compact('pageTitle','erreur','connect'));    
            
          
       
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


