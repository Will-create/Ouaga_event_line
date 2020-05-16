<?php
require_once('models/autoload.php');
class ControleurConnexion{
      protected $model;
      protected $redirect;
      protected $rendu;
      


      function __construct(){ 
        $this->model=new Admin();
        $this->redirect=new Http();
        $this->rendu=new Render();
      }
      public function login(){
      
        if($_SESSION['email']==$_POST["email"]AND $_SESSION['password']==md5($_POST["password"])){
         
          $entreprise='EDIF-WP';
          $pageTitle='eventform';
          header('Location: ../dashbord/liste');

        }else{
          $verification=$this->model->verif();
      if($verification=='ok'){
        
        $entreprise='EDIF-WP';
         $pageTitle='eventform';

         header('Location: ../dashbord/liste');
      }else{

       $erreur="Mot de passe ou email incorrect";
       $entreprise='EDIF-WP';
         $pageTitle='Home';
        $this->rendu->render('login',compact('pageTitle','entreprise',
                               'pageTitle',
                                'erreur'));

      }
        }
      
      
      
          
       
      }
      public function signin(){

      $this->model->emailverif();
      if($this->model->emailverif()=="ok"){
        $pageTitle='formulaire_Login';
        $erreur='cet email existe déja veuillez vous connecter';
        $connect='<a href="../formulaire/login">Se connecter</a>';
        $this->rendu->render('signin',compact('pageTitle','erreur','connect'));    
      }

      else {
        $this->model->insertAdmin();
           header('Location: ../formulaire/login');
        
      }
     
      
          
       
}
      public function logout(){

      header('Location: ../formulaire/login');







      }

      




}


