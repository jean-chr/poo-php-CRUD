<?php
    require_once('../../repositories/ProduitRepository.php');
    require_once('../../entities/Produit.php');
    require_once('../connectDB.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../components/css/bootstrap.css"/>
    <title>liste</title>
</head>
<body Class="well">
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand text-light" href="#">Ecommerce</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="../../../index.php" class="alert-link white">acceuil</a></li>
                    <li><a class="text-light" href="client_list.php">client</a></li>
                    <li><a  class="nav-link active" href="list.php">produits</a></li>
                    <li><a href="commande_list.php">commande</a></li>
                    <li><a href="listpayement.php">payement</a></li>
                    <li><a href="categorie_list.php">cathegorie</a></li>
                    <li><a href="livraison_list.php">livraison</a></li>
                    
                </ul>
            </div>
        </div>
    </div>
  <div class="container" style="margin-top: 70px;">
    
    <div class="row">
      <div class="panel panel-default col-sm-8">
          <div class="panel-heading">la liste de nos produits disponible!</div>
            <div class="panel-body">
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
                    <table class="table table-bordered border-primary">
                        <tr>
                            <td>#</td>
                            <td>Libellet</td>
                            <td>Prix</td>
                        </tr>
                        <?php
                            $repo = new ProduitRepository($bd);
                            $response = $repo->getAll();
                            for($i=0; $i<count($response); $i++){
                                $prodt = new Produit($response[$i]);       
                        ?>
                        <tr>
                            <td><?=$prodt->getId()?></td>
                            <td id="<?=$prodt->getId()?>">
                                <?=$prodt->getLibellet()?>
                                
                            </td>
                            <td id="<?=$prodt->getId()?>">
                                <?=$prodt->getPrix()?>
                                
                            </td>
                            <td>
                                <a href="#" id="<?=$prodt->getId()?>" class="details btn btn-primary">details</a>
                                <a href="update.php?id=<?=$prodt->getId()?>" class="btn btn-warning">Modifier</a>
                                <a href="delete.php?id=<?=$prodt->getId()?>" class="suppression btn btn-danger">Supprimer</a>
                            </td>
                        </tr>
                        <?php
                            }
                        ?>
                      </table>
                      <a href="create.php" class="btn btn-primary">Ajouter les produits</a>
                  </div>
              </div>
          </div>
          <div class="panel panel-default col-sm-4">
            <div class="panel-heading">
              <h3 class="panel-title">consulter ici les detail de nos produits</h3>
            </div>
            <div class="panel-body loader">
            Merci pou votre attention
            </div>
        </div>
    </div>
  </div>
      <script src="../../../components/js/jquery.js"></script>
      <script src="../../../components/js/bootstrap.js"></script>
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
                $('.loader').load('details.php?id='+id);
            });
        })
    </script>
</body>
</html>