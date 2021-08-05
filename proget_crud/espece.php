<?php

require_once "./db_conn.php";
require_once "./fonction.php";

  $sql = "SELECT * FROM espece";
  $req =  $conn->prepare($sql);
  $response = $req->execute();

  if ($response === true) {
   
      $especes = $req->fetchAll();
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
        <h1>gestion d'espece</h1>
        <a href="./ajouterEspece.php" class="btn btn-dark">Ajouter</a>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Libelle</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
          <?php foreach ($especes as $espece) : ?>
            <tr>
                <th scope="row"><?=  $espece['id'] ?></th>
                <td><?=  $espece['libelle_espece'] ?></td>
                <td>
                    <a href="updateEspece.php?id=<?php echo $espece['id']?>"  class="btn btn-primary">Edit</a>
                    <a  href="php/deleteEspece.php?id=<?php echo $espece['id']?>" class="btn btn-danger">Supprimer</a>
                </td>
            </tr>
          <?php endforeach ?>
        </tbody>
        </table>
    </div>

</body>
</html>