<?php
    require_once('../../repositories/ClientRepository.php');
    require_once('../../entities/client.php');
    require_once('../connectDB.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../../components/css/font-awesome.min.css">
    <!--<link rel="stylesheet" href="../../../components/css/bootstrap.css"/>-->
    <link rel="stylesheet" href="../../../components/css/bootstrap.min.css"/>
    <title>Clients</title>
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
          <a class="nav-link active" aria-current="page" href="src/pages/client/client_list.php">Client</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="list.php">Produit</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="categorie_list.php">categorie</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="commande_list.php">Commande</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="livraison_list.php">Livariason</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="listpayement.php">Payement</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>
    <div class="container">

        <div class="card-body">
            <?php 
                if(isset($_GET['message'])){
                    switch($_GET['message']){
                        case 'update':
                            echo'<div class="alert alert-success">Update successfully</div>';
                            break;
                        case 'delete':
                            echo'<div class="alert alert-danger">Delete successfully</div>';
                            break;
                    }
                }
            ?>
            
               
                <div class="container">

            <div class="panel panel-primary">
                <div class="panel-heading"> <h2 class="text-center">Les Clients <span class="fa fa-users"></span></h2></div>
                <a class="btn  btn-success btn-block" href="client_create.php" >
                    <h4>
                        <span class="fa fa-plus"></span> 
                        Ajouter un nouveau client
                    </h4>
				</a>      
                <br> <br>
                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                 <th> ID   </th> <th> Nom  </th> <th> Adresse </th><th> Action  </th> <th>   </th>   
								
								
                                            
                            </tr>
                        </thead>
                        <?php
                            $repo = new ClientRepository($bd);
                            $response = $repo->getAll();
                            for($i=0; $i<count($response); $i++){
                                $cli = new Client($response[$i]);       
                        ?>
                        <tr>
                            <td><?=$cli->getId()?></td>
                            <td id="<?=$cli->getId()?>"
                                class="details">
                                <?=$cli->getNom()?>
                            </td>

                            <td id="<?=$cli->getId()?>"
                                class="details">
                                <?=$cli->getAdresse()?>
                            </td>
                            <td>
                           
                                <a href="#" id="<?=$cli->getId()?>" class="details btn btn-light">Details</a>
                                <a href="client_update.php?id=<?=$cli->getId()?>" class="btn btn-success">modifier</a>
                                <a href="client_delete.php?id=<?=$cli->getId()?>" class="suppression btn btn-primary">supprimer</a>
                            </td>
                        </tr>
                        
                            <?php } ?>
                          
            </div>
            
        </div>
        </div>
        <div class="panel panel-default col-sm-6">
            <div class="panel-heading">
              <h3 class="panel-title">Détails</h3>
            </div>
            <div class="panel-body loader" >
            
            </div>
        </div>
    </div>
   


    </div>
    <script src="../../../components/js/jquery.min.js"></script>
    <script src="../../../components/js/bootstrap.min.js"></script>
    <script>
        $(function(){
            $('.suppression').click(function(e){
                if(confirm("Voulez vous vraiment supprimer")){
                    alert("oui");
                }else{
                    alert("Non");
                }
            });

            $('.details').click(function(e){
                var id = $(this).attr('id');
                $('.loader').load('client_details.php?id='+id);
            });
        })
    </script>
</body>
</html>