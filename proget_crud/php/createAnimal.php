<?php

require_once "../fonction.php";

if(isset($_POST["ajouterAnimal"])){

    require_once "../db_conn.php";

    $sql = "INSERT INTO animal SET nom = ?,poids = ?, age = ?, espece = ? , enclos = ?";

    $nomAnimal = $_POST["nom"];
    $poidsAnimal = $_POST["poids"];
    $ageAnimal = $_POST["age"];
    $especeAnimal = $_POST["libelle_espece"];
    $enclosAnimal = $_POST["nom_enclos"];

    $req = $conn->prepare($sql);
    $response = $req->execute([$nomAnimal,$poidsAnimal,$ageAnimal,$especeAnimal,$enclosAnimal]);
    


    if ($response === true) {
        header('location: ../animal.php?success');
        die;
    }else {
        header('location: ../ajouterAnimal.php.php?error=les donnees ne sont pas sauvegarger');
        die;
    }
}else{
  
    header('location: ../ajouterAnimal.php.php?error=le champ doit pas etre vide ');
    die;
}