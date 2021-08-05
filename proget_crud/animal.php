<?php

require_once "./db_conn.php";
require_once "./fonction.php";

  $sql = "SELECT animal.id, animal.nom,animal.poids, animal.age, espece.libelle_espece,enclos.nom_enclos FROM animal,espece,enclos WHERE animal.espece=espece.id AND animal.enclos=enclos.id ";
  $req =  $conn->prepare($sql);
  $response = $req->execute();

  if ($response === true) {
   
      $animals = $req->fetchAll();
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
        <h1>gestion Animal</h1>
        <a href="./ajouterAnimal.php" class="btn btn-dark">Ajouter</a>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">nom</th>
                <th scope="col">poids</th>
                <th scope="col">age</th>
                <th scope="col">espece</th>
                <th scope="col">enclos</th>
                <th scope="col">action</th>

            </tr>
        </thead>
        <tbody>
          <?php foreach ($animals as $animal) : ?>
           
            <tr>
                <th scope="row"><?=  $animal['id'] ?></th>
                <td><?=  $animal['nom'] ?></td>
                <td><?=  $animal['poids'] ?></td>
                <td><?=  $animal['age'] ?></td>
                <td><?=  $animal['libelle_espece'] ?></td>
                <td><?=  $animal['nom_enclos'] ?></td>
                <td>
                    <a href="updateAnimal.php?id=<?php echo $animal['id']?>" class="btn btn-primary">Edit</a>
                    <a href="./php/deleteAnimal.php?id=<?php echo $animal['id']?>" class="btn btn-danger">Supprimer</a>
                </td>
            </tr>
          <?php endforeach ?>
          
         
        </tbody>
        </table>
    </div>

</body>
</html>