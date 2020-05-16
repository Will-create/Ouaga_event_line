<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienvenu à votre plateforme Eventline</title>
    <link rel="stylesheet" type="text/css"  href="../style/css/bootstrap.min.css">
    <script type="text/javascript" src="../style/js/jquery/jquery.js"></script>
    <link rel="stylesheet" type="text/css"  href="../style/css/bootstrap-theme.min.css">
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

<h1 id="bienvenu"> Nouveau Evenement</h1>

<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>    
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../style/img/fest2.jpg" class="d-block images w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="../style/img/fest4.png" class="d-block images w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="../style/img/fest5.jpg" class="d-block images w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="../style/img/fest6.jpg" class="d-block images w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </div>

    <div class="carousel-item">
      <img src="../style/img/m2.jpg" class="d-block images w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<br>
<a href="#" class="btn couleur btn-primary">Tous</a>
<a href="#" class="btn couleur btn-primary">Musique</a>
<a href="#" class="btn couleur btn-primary">Festival</a>
<br>
<br>
<div class="sect-niv nivi">

 <div class="card carte">
  <img src="../style/img/m2.jpg" class="card-img-top" alt="...">

  <div class="card-body">
     <h3 class="card-title"><?= $event['nom'] ?></h3>
     <p class="descrip"> <?= $event['description'] ?>                </p>

<div class="card-body">

<div>
<?php if (count($comments)==0) : ?>
  <h5>Il n'y'a pas encore de commentaires pour cette evenement</h5>
  <?php elseif (count($comments)==1) : ?>
  <h5>Il n'y'a qu'un seul commentaire pour cette evenement</h5>
  <?php else : ?>
  <h5>Il y'a  <?= count($comments) ?> commentaires pour cette evenement</h5>
  <?php endif ?>
  <hr><br>
  <?php foreach ($comments as $comment) : ?>
  <label >Commentaire de</label>
  <b><?=$comment['pseudo'] ?></b>
  <label >Commenté le</label>
  <b><?=$comment['date_comment'] ?></b>

  <p><?=$comment['content'] ?></p>
  <hr>
  <br>
<?php endforeach ?>
</div>


    </div>
  </div>

</div>
<br>
<br>



</div>

<br>

<div class="card">
  <div class="card-body">
    This is some text within a card body.
  </div>
</div>
<br>
<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn couleur btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text"> This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn couleur btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
</div>





<script type="text/javascript" src="../style/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="../style/js/bootstrap.min.js"></script>