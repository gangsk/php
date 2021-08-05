<?php

require_once "../fonction.php";

if(isset($_POST["valideEnclos"]) && !empty($_POST["nomEnclos"])){

    require_once "../db_conn.php";

    $sql = "INSERT INTO enclos SET nom_enclos = ?";

    $nomEnclos = $_POST["nomEnclos"];

    $req = $conn->prepare($sql);

    $response = $req->execute([$nomEnclos]);

    if ($response === true) {
        header('location: ../enclos.php?success');
        die;
    }else{
        header('location: ../ajouterEnclos.php?error=les donnees ne sont pas sauvegarger');
        die;
    }
}else{
  
    header('location: ../ajouterE.php?error=le champ doit pas etre vide ');
    die;
}
