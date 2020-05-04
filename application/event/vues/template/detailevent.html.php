
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienvenu dans gestion moto</title>
    <link rel="stylesheet" type="text/css"  href="../style/css/bootstrap.min.css">
    <script type="text/javascript" src="../style/js/jquery/jquery.js"></script>
    <link rel="stylesheet" type="text/css"  href="../style/css/bootstrap-theme.min">
    <link rel="stylesheet" type="text/css"  href="../style/css/style.css">
</head>
<body>
  
<div class="container cont">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="image">
    <img src="../style/img/logo.jpeg">
</div>
  <button class="navbar-toggler  whit" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item  ">
        <a class="nav-link navcol" href="../home/index">Accueil </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link navcol" href="../marque/liste">Gestion de Motos</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link navcol" href="../vente/liste"> Gestion de vente</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link navcol" href="../connexion/logout">Deconnexion</a>
      </li>
      
    </ul>
    <!-- <div class="titre1" >
    <h6> Gestion et vente de motos originaux <h6>
</div> -->
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<br>
<br>
<br>





<br>
<br>















  <div class="row no-gutters">
    <div class="col-md-4">
      <img id="photoApprenant" src="../style/img/2.jpg" class="card-img" alt="image d'un apprenant">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h3 id="titreAp" class="card-title">Detail Moto</h3>
        <label for="nom" class="card-text"><h5>MARQUE</h5></label> <span id="nom"><?= $marque['Nom_de_la_marque_'] ?></span> <br>
        <label class="card-text"><h5>MODEL</h5></label><span id="prenom"><?= $moto['model'] ?></span> <br>
        <label class="card-text"><h5>CYLINDRE</h5></label><span id="date_naiss"><?= $moto['cylindre'] ?></span> <br>
        <label class="card-text"><h5>PRIX</h5></label><span id="genre"> <?= $moto['prix'] ?></span> <br>
        
      </div>
    </div>
  </div>
</div>