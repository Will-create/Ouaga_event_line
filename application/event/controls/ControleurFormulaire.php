


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
      
      
      
      $pageTitle='formulaire_login';
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
      



 public function enregistrement(){
    $pageTitle='Dashbord';
    $erreur=null;
    $entreprise='liste des evenements';
    $connect='';
    $this->rendu->render('enregistrement',compact('pageTitle','erreur','entreprise','connect'));    
             
          
       
      }
      




}


