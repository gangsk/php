<?php

if(isset($_GET['id'])){

    require_once "../db_conn.php";
    
    $sql = "UPDATE enclos SET nom_enclos =  ? WHERE id =?";
    $id = $_GET['id'];
    $libellespece = $_POST["nomEnclos"];

    $req = $conn->prepare($sql);

    $response = $req->execute([$libellespece, $id]);

    if ($response === true) {
        header('location: ../enclos.php?success');
    }else {
        header('location: ../enclos.php?error');
    }
    
}