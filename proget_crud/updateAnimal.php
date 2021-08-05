<?php

require_once "./db_conn.php";
require_once "./fonction.php";

  if (isset($_GET['id'])) {
    
    $sql = "SELECT * FROM enclos";
    $req =  $conn->prepare($sql);
    $response = $req->execute();
  
    if ($response === true) {
        $enclos = $req->fetchAll();
    }
  
    $sql = "SELECT * FROM espece";
    $req =  $conn->prepare($sql);
    $response = $req->execute();
  
    if ($response === true) {
        $especes = $req->fetchAll();
    }
  
    $sql = "SELECT * FROM animal WHERE id = ?";
    $req =  $conn->prepare($sql);
    $response = $req->execute([$_GET['id']]);
  
    if ($response === true) {
        $animal = $req->fetch();
    }

  }

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULAIRE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    
</head>

<nav class="navbar navbar-expand-lg text-white navbar-light bg-primary">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="./dashboard.php">Dashboard</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./animal.php">Animals</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./espece.php">Espêces</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./enclos.php">Enclos</a>
      </li>
    </ul>
  </div>
</nav>
<body>
<div class="container">

<form action="./php/updateAnimal.php?id=<?= $animal['id'] ?>"
method="post">
            <h4 class="display-4 text-center">FORMULAIRE</h4><hr><br>
            <?php if (isset($_GET['error'])) { ?>
            <div class="alert alert-danger" role="alert">
               <?php echo $_GET['error']; ?>
            </div>
            <?php } ?>
            <div class="mb-3">
                <label for="libelle_espece" >libelle espece</label>
                <select class="form-select" aria-label="Default select example" id="categories" name="espece">
                   
                    <?php   foreach($especes as $espece)  : ?>
                      <option value="<?=  $espece['id']?>"><?=  $espece['libelle_espece']?></option>
                      <?php endforeach ?>
                </select>

                  <div class="mb-3">
                <label for="nom_enclos" >Nom enclos</label>
                <select class="form-select"  aria-label="Default select example" id="categories" name="enclos">
                   
                    <?php   foreach($enclos as $enclo)  : ?>
                      <option value="<?=  $enclo['id']?>"><?=  $enclo['nom_enclos']?></option>
                      <?php endforeach ?>
                </select>

                  <div class="mb-3">
                <label for="nom" >Nom </label>
                <input type="name"
                 class="form-control"
                  id="nom"
                  value="<?= $animal['nom'] ?>" 
                  name="nom">
                    
                  <div class="mb-3">
                <label for="poids" >Poids </label>
                <input type="number"
                 class="form-control"
                 value="<?= $animal['poids'] ?>" 
                  id="poids"
                  name="poids">

                  <div class="mb-3">
                <label for="age" >Age </label>
                <input type="number"
                 class="form-control"
                 value="<?= $animal['age'] ?>" 
                  id="age"
                  name="age">


                
            <button type="submit" class="btn btn-primary"
            name="ajouterAnimal">ajouter</button>
    </form>
</div>
</body>
</html>




