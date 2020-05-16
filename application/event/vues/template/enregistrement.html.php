<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienvenu à votre plateforme Eventline</title>
    <link rel="stylesheet" type="text/css"  href="../style/css/bootstrap.min.css">
    <script type="text/javascript" src="../style/js/jquery/jquery.js"></script>
    <link rel="stylesheet" type="text/css"  href="../style/css/bootstrap-theme.min">
    <link rel="stylesheet" type="text/css"  href="../style/css/style.css">
</head>
<body>
  
<div class="container cont">
<nav class="navbar navbar-expand-lg" style="background-color:rgb(5, 5, 83); border-radius:10px;">
<div class="image">
<div class="cadre"></div>
<h3>Eventline</h3>
</div> 
  <button class="navbar-toggler  whit" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item">
        <a class="nav-link navcol" href="home/index">Accueil </a>
      </li>
      <li class="nav-item  active">
        <a class="nav-link navcol" href="home/index">Evenement </a>
      </li>  
    </ul>
  <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
  </div>
</nav>

<h1 id="bienvenu">Dashbord</h1>
<div class="milieu1"> 
<div class="gauche1"> 
<img src="../style/img/m2.jpg" class="image2">
</div>
<div class="droite1"> 
<form action="../dashbord/form" method="POST">
<div class="form-group">
    <input type="hidden" name="id_event" class="form-control" value="<?= $id_event ?>" id="exampleFormControlInput1" placeholder="" required ="required">
  </div>
<div class="form-group">
    <input type="hidden" name="id_categorie" class="form-control" value="<?= $id_categorie ?>" id="exampleFormControlInput1" placeholder="" required ="required">
  </div>
  <div class="form-group">
    <input type="text" name="nom" required class="form-control champ" id="exampleFormControlInput1" placeholder="Titre de l'évement" required>
  </div>
  <div class="form-group">
    <textarea class="form-control champ"  name="descriptions" > Description </textarea>
</div>
  <div class="form-group">
    <input type="date" name="date_debut" required class="form-control champ" id="exampleFormControlInput1" placeholder="Date de début" required>
  </div>
  <div class="form-group">
    <input type="date" name="date_fin" required class="form-control champ" id="exampleFormControlInput1" placeholder="Date de fin" required>
  </div>
  <div class="form-group">
    <input type="text" name="organisateur" required class="form-control champ" id="exampleFormControlInput1" placeholder="Organisateur" required>
  </div>
  <div class="form-group">
    <input type="text" name="lieu" required class="form-control champ" id="exampleFormControlInput1" placeholder="Lieu" required>
  </div>
  <div class="form-group">
    <input type="text" name="infoline" required class="form-control champ" id="exampleFormControlInput1" placeholder="infoline" required>
  </div>
  <div class="form-group row-md-6">
  <input type="file" name="photo" class="form-controlb" id="inputPassword4" oninput="afficherPhoto(this,'profil')">
  </div>   

 
  <div class="sbouton1">
    <input id="sendTuteurs" type="submit" value="Envoyer" name="valider"class="btn btn-outline-primary sbouton2">
    <button class="btn btn-outline-primary sbouton2"> <a href="../dashbord/liste">Annuler</a>  </button>  
  </div>
</form>
</div>  
</div>  
