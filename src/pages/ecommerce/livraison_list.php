<?php
    require_once('../../entities/Livraison.php');
    require_once('../../repositories/LivraisonRepository.php');
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
<body Class="well" style="background-color: blueviolet;">
    <!--entete--->
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
                    <li><a href="list.php">produits</a></li>
                    <li><a href="commande_list.php">commande</a></li>
                    <li><a href="listpayement.php">payement</a></li>
                    <li><a href="categorie_list.php">cathegorie</a></li>
                    <li><a  class="nav-link active" href="livraison_list.php">livraison</a></li>
                    
                </ul>
            </div>
        </div>
    </div>
     <!--fin entete--->
  <div class="container" style="margin-top: 70px; background-color: yellow;">
    
    <div class="row" >
      <div class="panel panel-default col-sm-8" style="background-color: yellow;">
          <div class="panel-heading" style="background-color: yellow;">la liste de nos Livraison</div>
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
                    <table class="table table-condensed table-striped" style="background-color: yellow;">
                        <tr class="table">
                            <thead class="table-dark">
                                <td>#</td>
                                <td>Nom</td>
                                <td>Adresse</td>
                                <td>Action</td>   
                            </thead>
                      
                        </tr>
                        <?php

                        $livrons = new LivraisonRepository($bd);
                            $response = $livrons->getAll();

                            for($i=0; $i<count($response); $i++){
                                $livrons = new Livraison($response[$i]);       
                        ?>

                        <tr>
                            <td><?=$livrons->getId()?></td>
                            <td id="<?=$livrons->getId()?>">
                                <?=$livrons->getNom()?>   
                            </td>

                            <td id="<?=$livrons->getId()?>">
                                <?=$livrons->getAdresse()?>
                                
                            </td>
                            
                            <td>
                                <a href="livraison_update.php?id=<?=$livrons->getId()?>" class="btn btn-warning">Modifier</a>
                                <a href="livraison_delete.php?id=<?=$livrons->getId()?>" class="suppression btn btn-danger">Supprimer</a>
                                <a href="#" id="<?=$livrons->getId()?>" class="detail btn btn-primary">details</a>
                             
                            </td>
                        </tr>

                        <?php
                            }
                        ?>

                      </table>
                      <a href="livraison_create.php" class="btn btn-primary">Ajouter les Livraisons</a>
                      </div>
                </div>
            </div>

            <div class="panel panel-default bg-warning col-sm-4" style="background-color: yellow;">
                <div class="panel-heading" style="background-color: yellow;">
                    <h3 class="panel-title " >consulter ici les detail de nos Livraisons</h3>
                </div>
                <div class=" absolute  panel-body loader">
                    Vous verez les details ici ....
                </div>
            </div>
    </div>
  </div>
 <script src="../../../components/js/jquery.js"></script>
    <script src="../../../components/js/bootstrap.js"></script>


      <script>
        $(function(){
            $('.suppression').click(function(e){
                if(confirm("Voulez vous vraiment supprimer ")){
                    alert(" vous venez de supprimer la livraison avec le nom:<?=$livrons->getNom()?>");
                }
                else{
                    
                }
            });
            $('.detail').click(function(e){
                var id = $(this).attr('id');
                    $('.loader').load( 'livraison_detail.php?id='+id);  
            });
        })
    </script>


</body>
</html>
