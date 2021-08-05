<?php

if(isset($_GET['id'])){

    require_once "../db_conn.php";
    
    $sql = "DELETE FROM animal WHERE id =?";
    $id = $_GET['id'];

    $req = $conn->prepare($sql);

    $response = $req->execute([$id]);

    if ($response === true) {
        header('location: ../animal.php?success');
    }else {
        header('location: ../animal.php?error');
    }

}