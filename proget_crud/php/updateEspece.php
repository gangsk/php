<?php

if(isset($_GET['id'])){

    require_once "../db_conn.php";
    
    $sql = "UPDATE espece SET libelle_espece =  ? WHERE id =?";
    $id = $_GET['id'];
    $libellespece = $_POST["nomEspece"];

    $req = $conn->prepare($sql);

    $response = $req->execute([$libellespece, $id]);

    if ($response === true) {
        header('location: ../espece.php?success');
    }else {
        header('location: ../espece.php?error');
    }
    
}