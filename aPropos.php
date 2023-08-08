<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />  
    <link rel="stylesheet" href="assets/bootstrap-5.1.3-dist/css/Caroussel.css"  crossorigin="anonymous">
    <title>A propos de nous</title>
    <?php require_once "header.php" ?>
</head>
<body>
    <div class="pres">
    <h1 class="presstitre">Kay Lek</h1>
    <p class="presstxt">KaylekKAY LEK signification de ” vient manger ” en Wolof langue parler 
        au Sénégal. Crée en 2020.</p>
        <img class="presimg" src="img/KayLek2.png">
        </div>

<div class="directrice">
    <h2 class="directricetitre"><ins>Directrice</ins></h2>
    <p class="directricetxt">Entreprise diriger par Matou, une jeune maman marié de 3 enfants, passionné de cuisine. Elle aime préparé a manger pour sa famille avec soin et délicatesse. <br>

“Je partage ma passion avec vous à travers divers formations, afin de vous faire découvrir la culture culinaire de mon pays.

Vos plats sont confectionnés par mes soins chez moi, à la demande.

Si mes plats te donnent envie et que tu n’as pas le temps de cuisiner. Il te sera possible de passer ta commande ou simplement de demander ton cours en privé ou en groupe pour t’améliorer.

Je te souhaite la bienvenue dans mon quotidien culinaire.”</p>
</div>


<div class="participation">
    <h2 class="participationtitre">Participation aux festivités pharmacie à Melun en 2021.</h2>
    <p class="participationtxt">Kaylek box a été désigné comme traiteur pour participer aux festivités pharmacie de la place Saint Jean lors de son 181e anniversaire,<br> le samedi 10 juillet 2021 à Melun.</p>
    <img class="participationimg" src="img/festival.png">

<p class="participationtxt2">Nos remerciement au docteur Alain KARKI et à la ville de Melun pour leur confiance.</p>
<img class="participationimg2" src="img/festival2.png">
</div>
</body>
<script>
    var target = document.querySelector('.pres');
    var target2 = document.querySelector('.participation')
    var windowHeight = window.innerHeight;


    window.addEventListener('load', function() {
      target.style.backgroundColor = '#BBAA51';

      
    });
    

    
 
    function startAnimation(){
        target2.style.backgroundColor = '#BBAA51';
    }

    function stopanimaton(){
        target2.style.backgroundColor = 'white';
    }

    window.addEventListener('scroll', function() {
        var targetPosition = target.getBoundingClientRect();

        if (targetPosition.top < windowHeight && targetPosition.bottom >= 0) {
            startAnimation();
        } else {
            stopAnimation();
        }
    });
</script>
</html>

