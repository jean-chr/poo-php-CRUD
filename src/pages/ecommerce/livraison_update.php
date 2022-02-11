<?php
    require_once('../../entities/Livraison.php');
    require_once('../../repositories/LivraisonRepository.php');
    require_once('../connectDB.php');
    if(isset($_GET['id']) && !empty($_GET['id'])){
        $id = (int)htmlspecialchars($_GET['id']);
        
        $livraisonRepo = new LivraisonRepository($bd);

        $livrons = $livraisonRepo->getOne($id);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../components/css/bootstrap.min.css"/>
    <title>Updatelivraison</title>
</head>
<body class="bg-warning">
    <!--entete--->
<div class="">
          <nav class="navbar navbar-dark bg-dark">
               <div class="container-fluid">
                    <a class="navbar-brand text-white">Ecommerce</a>
                    <a href="../../../index.php" class="alert-link white">acceuil</a>
                    <a href="livraison_list.php" class="alert-link">liste des livraison</a>
                    <form method="POST" action="livraison_list.php" class="d-flex">
                         <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                         <button class="btn btn-outline-success" type="submit" value="">recherche</button>
                    </form>
               </div>
          </nav>
     </div>
    <!--fin -entete--->
     <marquee behavior="" direction="" class="bg-warning">verifié bien les informations</marquee>
<div class="container col-md-6">
            <div class=" ">
                <h3 class="panel-heading bg-primary  ">update livraisons</h3>
            </div>
            <div class="">
                <form action="livraison_traitement.php" method="POST" class="well">
                    <input type="hidden" name="id" class="form-control" value="<?=$livrons->getId()?>"/>
                    <div class="form-group">
                        <label for="nom" class="form-label">Nom </label>
                        <input type="text" name="nom" id="nom" class="form-control" value="<?=$livrons->getNom()?>"/>
                    </div>
                    <div class="form-group">
                        <label for="prenom" class="form-label">addresse</label>
                        <input type="text" name="adresse" id="addresse" class="form-control" value="<?=$livrons->getAdresse()?>"/>
                    </div>
                    <div class="form-group">
                        <label for="contct" class="form-label">contact </label>
                        <input type="tel" name="contact" id="contact" class="form-control" value="<?=$livrons->getContact()?>"/>
                    </div>
                    
                    <input type="submit" name="submit" value="update" class="form-control btn btn-primary">
                </form>
            </div>
    </div>
    <script src="../../../components/js/jquery.js"></script>
    <script src="../../../components/js/bootstrap.js"></script>
</body>
</html>

