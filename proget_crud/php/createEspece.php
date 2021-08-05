<?php

require_once "../fonction.php";



if (isset($_POST["valideEspece"]) && !empty($_POST["nomEspece"])) {

  
    require_once "../db_conn.php";
    
    $sql = "INSERT INTO espece SET libelle_espece = ?";

    $libellespece = $_POST["nomEspece"];

     $req = $conn->prepare($sql);

    $response = $req->execute([$libellespece]);

    if ($response === true) {
        header('location: ../espece.php?success');
        die;
    }else{
        header('location: ../ajouterEspece.php?error=les donnees ne sont pas sauvegarger');
        die;
    }
}else{
  
    header('location: ../ajouterEspece.php?error=le champ doit pas etre vide ');
    die;
}