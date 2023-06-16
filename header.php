<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</style>
</head>
<body>
<?php session_start(); ?>

<nav class="navbar navbar-expand-lg navbar-light bg-whight"> 
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  
  <ul class="navbar-nav mr-auto">
     <div class="navbarcontent">
    <li class="nav-item active">
        <a class="nav-link" href="aPropos.php">a Propos de KayLak <span class="sr-only"></span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="cartes.php">Cartes</a>
      </li>


      <li class="nav-item ">
        <a class="nav-link" href="nosplats.php">Nos plats </a>
      </li>

      <li class="nav-iem">
        <a class="nav-link" href= "index.php" ><img class = "logo" src="img/KayLek2.png" alt="Description de l'image" ></a>
      </li>

      <li class="nav-item ">
        <a class="nav-link" href="#">Nos Formations </a>
      </li>

      <li class="nav-item ">
        <a class="nav-link" href="#">Contactez nous </a>
      </li>
      <?php
      if (isset($_SESSION['login']) && isset($_SESSION['role'])):
      ?>
      <li class="">
        <a class="nav-link" href="modification.php"><img class = "login" src="img/LOGIN.png" alt="Description de l'image" > <div class="compte" >Modifier</div> </a>
      </li>
<?php endif ?>

<?php
      if (!isset($_SESSION['login']) && !isset($_SESSION['role'])):
      ?>
      <li class="">
        <a class="nav-link" href="Authentif.php"><img class = "login" src="img/LOGIN.png" alt="Description de l'image" > <div class="compte" >Connexion</div> </a>
      </li>
<?php endif ?>
<?php
      if (isset($_SESSION['login']) && isset($_SESSION['role'])):
      ?>
      <li class="">
        <a class="nav-link" href="logoutkaylek.php"><img class = "login" src="img/LOGIN.png" alt="Description de l'image" > <div class="compte" >Déconexion</div> </a>
      </li>
<?php endif ?>

    </div>
    </ul>
  </div>
</nav>

</body>
</html>