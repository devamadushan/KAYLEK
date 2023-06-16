<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />  
    <link rel="stylesheet" href="assets/bootstrap-5.1.3-dist/css/Caroussel.css"  crossorigin="anonymous">
    <title>Nos Cartes</title>
    <?php require_once "header.php" ?>
</head>
<body>
    <img class="backgoundimg" src="img/background.jpg" alt="">
    <div class="autentification">
<table class="tableauthentif">
<form action="loginkayley.php" method="post" class="carre">
    <tr>
        <td class="colauthentif">
            <img class="authentiflogo" src="img/KayLek2.png" alt="">
        </td>
    </tr>
    <tr>
        <td class="inputauthentif">
        Votre utilisateur : <br /><input  type="text" name="login"><br />
        Votre mot de passe : <br /><input type="password" name="pwd">
        </td>
    </tr>
    <tr>
        <td class="inputauthentif">
        <input class="submit" type="submit" value="Connexion">
    </td>
</tr>
</form>
<form action="inscrip.php" methode="post">
<tr>
<td class="inputauthentif">
    Pas encore inscrit ? Cliquez ici 
    
    </td>
</tr>
<tr>
    <td class="inputauthentif">
    <input class="" type="submit" value="Inscription">
    <br><br>
    </td>
</tr>
</form>
</table>
</div>
</body>