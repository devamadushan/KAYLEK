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

<?php 

$id= $_SESSION['id'];
$utilisateur= getutilisateur($id);
 ?>
</head>

<body>
<div class="update">
<form action="updateutilisateurs.php" method="get" >
<fieldset>
<legend> <i>Modifier</i></legend>
Nom : <br>
<input type="text" name="nom" required value="<?php echo $utilisateur->nom; ?>" /> <br />
Prénom : <br>
<input type="text" name="prenom" required value="<?php echo $utilisateur->prenom; ?>" /> <br />
Date de naissance : <br>
<input type="date" name="naissance" value="<?php echo $utilisateur->date_naissance; ?>"/> <br />
<input type="hidden" name="id" value="<?php echo $utilisateur->id ?> ">
<fieldset>
<input type="submit" value="mettre à jour" />
<input type="reset" value="Effacer" />

</form>
</div>
</body>