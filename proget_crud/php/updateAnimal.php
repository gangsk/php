<?php

if(isset($_GET['id'])){

    require_once "../db_conn.php";
    
    $sql = "UPDATE animal  SET nom = ?, poids= ?, age = ?,enclos = ?,espece = ?  WHERE id =?";
    $id = $_GET['id'];

    $nomAnimal = $_POST["nom"];
    $poidsAnimal = $_POST["poids"];
    $ageAnimal = $_POST["age"];
    $especeAnimal = $_POST["espece"];
    $enclosAnimal = $_POST["enclos"];
    
    $req = $conn->prepare($sql);

    $response = $req->execute([$nomAnimal,$poidsAnimal,$ageAnimal,$enclosAnimal,$especeAnimal,$id]);

    if ($response === true) {
        header('location: ../animal.php?success');
    }else {
        header('location: ../animal.php?error');
    } 
}else{
    header('location: ../animal.php?error'); 
}