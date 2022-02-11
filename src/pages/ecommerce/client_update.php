<?php
    require_once('../../repositories/ClientRepository.php');
    require_once('../../entities/client.php');
    require_once('../connectDB.php');

    if(isset($_GET['id']) && !empty($_GET['id'])){
        $id = (int)htmlspecialchars($_GET['id']);
        
        $clientRepo = new ClientRepository($bd);

        $clien = $clientRepo->getOne($id);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../components/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="../../../components/css/style1.css"/>
    <title>Update personne</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">ecommerce</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
      <li class="nav-item">
            <a href="../../../index.php" class="alert-link white">acceuil</a>
        </li>
        <li class="nav-item">
          <a aria-current="page" href="client_list.php">liste des Client</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="client_create.php">enregistrement client</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>
<div class="container">
        <div class="form">
            <div class="row">
                <h3>Nouvel enregistrement</h3>
            </div>
            <div class="row ">
                <form action="client_traitement.php" method="POST" class="myForm">
                    <input type="hidden" name="id" class="form-control" value="<?=$clien->getId()?>"/>
                    <div class="form-group">
                        <label for="nom" class="form-label">Nom </label>
                        <input type="text" name="nom" id="nom" class="form-control" value="<?=$clien->getNom()?>"/>
                    </div>
                    <div class="form-group">
                        <label for="prenom" class="form-label">Prenom </label>
                        <input type="text" name="prenom" id="prenom" class="form-control" value="<?=$clien->getPrenom()?>"/>
                    </div>
                    <div class="form-group">
                        <label for="adresse" class="form-label">Adresse </label>
                        <input type="text" name="adresse" id="adresse" class="form-control" value="<?=$clien->getAdresse()?>"/>
                    </div>
                    
                    <input type="submit" name="submit" value="update" class="form-control">
                </form>
            </div>
            
        </div>
    </div>
    <script src="../../../components/js/jquery.min.js"></script>
    <script src="../../../components/js/bootstrap.min.js"></script>
</body>
</html>

