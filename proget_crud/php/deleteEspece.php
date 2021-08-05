<?php

if(isset($_GET['id'])){

    require_once "../db_conn.php";
    
    $sql = "DELETE FROM espece WHERE id =?";
    $id = $_GET['id'];

    $req = $conn->prepare($sql);

    $response = $req->execute([$id]);

    if ($response === true) {
        header('location: ../espece.php?success');
    }else {
        header('location: ../espece.php?error');
    }

}