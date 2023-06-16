<?php

function getAuthentification($login,$pwd){
    global $pdo;
    $query = 'SELECT * FROM utilisateur WHERE login= :login and password= :pwd';
    $prep = $pdo->prepare($query);
    $prep->bindValue(':login', $login);
    $prep->bindValue(':pwd', $pwd);
    $prep->execute();
    // on vérifie que la requête ne retourne qu'une seule ligne
    if($prep->rowCount() == 1) {
        $result = $prep->fetch();
        return $result;
    }
    else
    return false;
  
}

function getutilisateur($id)
{
    global $pdo;
    $requete = "SELECT * FROM utilisateur where id = :id";
    try{
        $prep = $pdo->prepare($requete);
        $prep->bindParam(':id', $id, PDO::PARAM_INT);
        $prep->execute();
        $result = $prep->fetch();
        return $result;
    }
    catch ( Exception $e ) {
        die ("erreur dans la requete ".$e->getMessage());
    }
}



?>