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
      $nombres[$i]=count($this->comment->findAllByEvent($event['id_event']));
      
            }
     $pageTitle="liste des evenements";

     $this->rendu->render('welcome',compact('pageTitle',
        'events','nombres'));
}





}
      

