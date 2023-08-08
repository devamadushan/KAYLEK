<!DOCTYPE html>
<html lang="en">
<head>
<?php require_once "header.php" ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/bootstrap-5.1.3-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css" />  
    <link rel="stylesheet" href="assets/bootstrap-5.1.3-dist/css/Caroussel.css"  crossorigin="anonymous">
    <title>Kay Lek</title>
</head>
<body>

<div id="carouselExampleIndicators" class="carousel slid" data-ride="carousel" data-interval="5000">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/image1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/image2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/image3.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    
    
    
    
    <br>
    <h1 class="titre">Nos Conditions</h1>
   
    <table class="tables">
  
    <tr>
      <th ><img class="condition" src="img/cuisson.gif"></th>
      <th scope="col"> <img class="condition" src="img/heures-douverture.gif"></th>
      <th scope="col"><img class="condition" src="img/route.gif" ></th>
    </tr>
   
    <tr>
      <td class="condition" style="">Nous cuisinons uniquement à la demande <br> minimum de commande 4plats/jus</td>
      <td class="condition" >Commande à passer 72h avant</td>
      <td class="condition" >Retrait de commande possible a la Gare de Savigny</td>
    </tr>
</table>


<div class="zmenu">

<h1 class ="menu" id="menu">Nos Menus</h1>
<p id="phrases"class="MT">une palette de délices faits maisons à savourer seul ou a plusieur.</p>


<table id="myTable" class="table2">
<tr>
    <th class="descmenu1"><img  id="imageCell" src="img/menu1.JPG" class="imgmenu"></th>
    <th class="descmenu1"><img id="imageCell" src="img/menu3.JPG" class="imgmenu"></th>
    <th class="descmenu1"><img id="imageCell" src="img/menu2.JPG" class="imgmenu"></th>
</tr>
<tr>
    <td id="textcell" class="descmenu">Plats Sénegalais <br> Menu (Entrée-plat-boisson)</td>
    <td id="textcell" class="descmenu">Plats Végétariens <br> Plat</td>
    <td id="textcell" class="descmenu">Salé & Sucré <br> Assotiment de mignardise</td>
    <br>
</tr>
<tr>
<td  id="textcell"><a href="menu.php" ><button type="button" class="btn btn-info">Pour en savoir plus</button></a></td>
<td id="textcell"><a href="menu.php" ><button type="button" class="btn btn-info">Pour en savoir plus</button></a></td>
<td id="textcell"><a href="menu.php" ><button type="button" class="btn btn-info">Pour en savoir plus</button></a></td>
</tr>
</table>
<br>
</div>




<div class="titregrillade">
<h1 class ="menu2" id="menu">Grillade</h1>
<div>
<div class="wrap--image"> 
<table class="gr">
  <tr>
    <th class="descmenu3" style="">
<img id="" src="img/grillade2.png" class="grilladeimg">
</th>
</tr>
<tr>
  <td class="descmenu4" style="padding-top: 50px;"> 
   <h3 class ="" style="  "></h3> <br> 

 <p class="grilladetxt"> <ins>Succombez aux délices grillés de Dibi   </ins> <br>Sprecilité de viande grillée originaire d'Afrique de l'ouest.<br><br><br>
  Nous proposons nos Dibi à base de mouton ou de poulet(aux choix) avec divers accompagnement:</p>
<ul class="descmenu2" >
  <li>vermicelles</li>
  <li>Alloco</li>
  <li>Riz Atiéké</li>
  <li>Avec une sauce au choix</li>
</ul>
</td>
</tr>
</table>
</div>
<div class="zoneBTI">
<div class="zonebT">
<h1 class="titreb">Envie d'un brush?</h1>
<br>
<p class="texteb">Box bruch à composer contenant du cucré, salé et une boisson.<br><br>
Inclus au choix:<br><br>
Pain - Confiture - Nutella - Beurre - Thé - Café - Nesquick</p><br>
</div>
<img class="imgb" src="img/brunch.jpg">
</div>


<script>
  var target = document.querySelector('.zmenu');
  // target.style.backgroundColor = 'white';

  var target2 = document.querySelector('.table2');
   var target3 = document.querySelector('.grilladeimg');


  function startAnimation() {
    target.style.backgroundColor = '#BBAA51';
    target2.style.height = '650px';
    target2.style.transition = 'height 1.9s ease';
    }

  function stopAnimation() {
    target.style.backgroundColor = 'white';
    target2.style.height = '250px';
  }

  window.addEventListener('scroll', function() {
    var targetPosition = target.getBoundingClientRect();
    var targetPosition = target3.getBoundingClientRect();
    var windowHeight = window.innerHeight;

    if (targetPosition.top < windowHeight && targetPosition.bottom >= 0) {
      startAnimation();
    } else {
      stopAnimation();
    }
  });

  var images = document.querySelectorAll('.imgmenu');

  for (var i = 0; i < images.length; i++) {
    images[i].addEventListener('mouseover', function() {
      this.style.webkitBorderRadius = '100px';
    });

    images[i].addEventListener('mouseleave', function() {
      this.style.webkitBorderRadius = '0';
    });
  }
</script>



</body>
</html>