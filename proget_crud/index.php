
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

<form action="php/create.php"
method="post">
            <h4 class="display-4 text-center">FORMULAIRE</h4><hr><br>
            <?php if (isset($_GET['error'])) { ?>
            <div class="alert alert-danger" role="alert">
               <?php echo $_GET['error']; ?>
            </div>
            <?php } ?>
            <div class="mb-3">
                <label for="libelle_espece" >libelle espece</label>
                <input type="text"
                 class="form-control"
                  id="libelle_espece"
                  name="libelle_espece">

                  <div class="mb-3">
                <label for="nom_enclos" >Nom enclos</label>
                <input type="text"
                 class="form-control"
                  id="nom_enclos"
                  name="nom_enclos">

                  <div class="mb-3">
                <label for="nom" >Nom </label>
                <input type="name"
                 class="form-control"
                  id="nom"
                  name="nom">

                  <div class="mb-3">
                <label for="poids" >Poids </label>
                <input type="number"
                 class="form-control"
                  id="poids"
                  name="poids">

                  <div class="mb-3">
                <label for="age" >Age </label>
                <input type="number"
                 class="form-control"
                  id="age"
                  name="age">


                
            <button type="submit" class="btn btn-primary"
            name="ajouter">ajouter</button>
    </form>
</div>
</body>
</html>




