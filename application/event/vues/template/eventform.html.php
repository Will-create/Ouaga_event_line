
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

<div class="table-responsive-xl"> 
<?php
      if(isset($_GET['rep']))
      {
        echo '<h5>'.$_GET['rep'].'</h5>';
      }
     ?>
  <table class="table">
  <thead>
  <th></th>
  <th>N°</th>
  <th>Titre de l'évement</th>
  <th>Organisateur</th>
  <th>Lieu</th>
  <th>Date de debut</th>
  <th>Date de fin</th>
  <th>Infoline</th>
  <th>Photo</th>
  </thead>
  <tbody>
  <?php
  foreach ($events as $event) {
  ?>
  <tr>
  <td><a href="../dashbord/delete?id=<?php echo $event['id_event'];?>" class="text-danger">&#10060 </a><a href="../dashbord/modifierEvent?id=<?php echo $event['id_event'];?>">&#9998</a></td>
  <td><?= $event['id_event'] ?></td>
  <td><?= $event['nom'] ?></td>
  <td><?= $event['organisateur']?></td>
  <td><?= $event['lieu'] ?></td>
  <td><?= $event['date_debut'] ?></td>
  <td><?= $event['date_fin'] ?></td>
  <td><?= $event['infoline'] ?></td>
  <td><?= $event['photo'] ?></td>
  </tr>
  <?php  
  }
  ?>
  </tbody>
  </table>
</div>
<br>
<button class="btn btn-outline-primary sbouton2"> <a href="../formulaire/enregistrement">Nouveau</a>  </button>  







