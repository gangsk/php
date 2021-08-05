<?php

if(isset($_GET['id'])){

    require_once "../db_conn.php";
    
    $sql = "DELETE FROM enclos WHERE id =?";
    $id = $_GET['id'];

    $req = $conn->prepare($sql);

    $response = $req->execute([$id]);

    if ($response === true) {
        header('location: ../enclos.php?success');
    }else {
        header('location: ../enclos.php?error');
    }

}