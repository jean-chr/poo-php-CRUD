<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../components/css/bootstrap.min.css"/>
    <title>Nouvelle livraison</title>
</head>
<body class="bg-dark">
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
<div class="navbar navbar-inverse navbar-fixed-top bg-white" role="navigation">
    </div>
    <div class="container col-md-4 " style="margin-top: 70px;">
        <div class="card">
            <div class="">
                <h3 class="border border-raduis  btn-primary form-control ">Nouvel enregistrement des livraisons</h3>
            </div>
            <div class="">
                <form action="livraison_traitement.php" method="POST" class="form well">
                    <div class="form-group ">
                        <label for="nom" class="form-label">nom</label>
                        <input type="text" name="nom" id="nom" class="form-control"/>
                        <label for="adresse" class="form-label">adresse </label>
                        <input type="text" name="adresse" id="adresse" class="form-control" placeholder="exple:kara-togo"/> <br>
                        <label for="contact" class="form-label">telephone </label>
                        <input type="tel" name="contact" placeholder="exple:20 20 78 15">
                    </div>
                    <div class="modal-footer">
                        <input type="submit" name="submit" value="create" class=" btn btn-primary">
                        <a href="livraison_list.php" class="btn btn-danger  btn btn-primary">Annuler</a>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
    <script src="../../../components/js/jquery.js"></script>
    <script src="../../../components/js/bootstrap.js"></script>
</body>
</html>