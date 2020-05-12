

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienvenu à votre plateforme Eventline</title>
    <link rel="stylesheet" type="text/css"  href="style/css/bootstrap.min.css">
    <script type="text/javascript" src="style/js/jquery/jquery.js"></script>
    <link rel="stylesheet" type="text/css"  href="style/css/bootstrap-theme.min">
    <link rel="stylesheet" type="text/css"  href="style/css/style.css">
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

<h1 id="bienvenu"> Connexion </h1>
<div class="milieu1"> 
<div class="gauche"> 
<img src="style/img/image.png" class="image1">
</div>
<div class="droite"> 
<form action="connexion/login" method="POST">
  <div class="form-group">
    <input type="text" name="email" required class="form-control champ" id="exampleFormControlInput1" placeholder="E-mail" required>
  </div>
  <div class="form-group">
    <input type="password" name="password" required class="form-control champ" id="exampleFormControlInput1" placeholder="Mot de passe" required>
  </div>
 
  <div class="sbouton1">
    <input id="sendTuteurs" type="submit" value="Connexion" name="valider"class="btn btn-outline-primary sbouton2">
    <button class="btn btn-outline-primary sbouton2"> <a href="formulaire/signin">S'inscrire</a>  </button>  
  </div>
</form>
</div>   
</div>



<div class="foot"> 


<h4>WWW.COPYRYTH.2020.EVENTLINE<h4>


</div>
</div>




<script type="text/javascript" src="style/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="style/js/bootstrap.min.js"></script>




</body>
</html>

vs