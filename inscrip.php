<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />  
    <link rel="stylesheet" href="assets/bootstrap-5.1.3-dist/css/Caroussel.css"  crossorigin="anonymous">
    <title>Nos Cartes</title>

<?php 

require_once 'header.php';
require_once 'inc/connexion-db.php';
require_once 'inc/manager-db.php';
?>
</head>
<body>
<img class="backgoundimg" src="img/background.jpg" alt="">
    <table class="inscriptable">
        <form action="kaylekTratement.php"  method="post">
        <tr>
            <td class="inputinscript">
            Nom :<br>
            <input type="text" id="utilisateur" name="nom" required>
            </td>
            <tr>
            <td class="inputinscript">
            Prenom : <br>
            <input type="text" id="prenom" name="prenom" required>
            </td>
            </tr>
        </tr>
        <tr>
            <td class="inputinscript">
        Date de naissance : <br>
        <input type="date" name="calendrier" required>
        </td>
        </tr>
        <tr>
            <td class="inputinscript">
                utilisateur : <br>
                <input type="text" id="utilisateur" name="login" required>
            </td>
        </tr>
        <tr>
            <td class="inputinscript">
            Mot de passe : <br>
            <input type="password" id="password" name="pwd" required>
            </td>
        </tr>
        <tr>
            <td class="inputinscript">
            <input type="submit" id="sub" value="S'inscrire">
            <br><br>
            </td>
        </tr>
        </form>
    </table>
</body>