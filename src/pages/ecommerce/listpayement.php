<?php
    require_once('../connectDB.php');
    require_once('../../entities/payement.php');
    require_once('../../repositories/payementRepository.php');
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
    <div class="card-body">
       <?php
       if(isset($_GET['message'])){
           switch($_GET['message']){
               case 'inserted':
                echo '<div class="alert alert-success">Insertion reussi avec succes</div>';
                break;
               case 'update':
                echo '<div class="alert alert-warning">Modification effectué avec succes</div>';
                   break;
                case 'delete':
                    echo '<div class="alert alert-danger">Suppression effectué</div>';
                    break;
            }
       }
       ?>
    </div>    
    <div class="container" style="margin-top: 70px;">
    <div class="row">
      <div class="panel panel-default col-sm-8">
          <div class="panel-heading">la liste des Payements recus!!!!</div>
            <div class="panel-body">
                <div class="card-body">
                    <table class="table table-bordered border-primary">
                        <tr>
                            <td>#</td>
                            <td>Date de payement</td>
                            <td>Mode de payement</td>
                        </tr>
                        <?php
                            $admin = new payementRepository($bd);
                            $response = $admin->getAll();
                            for($i=0; $i<count($response); $i++){
                                $paye = new payement($response[$i]);       
                        ?>
                        <tr>
                            <td><?=$paye->getId()?></td>
                            <td id="<?=$paye->getId()?>">
                                <?=$paye->getDatedepayement()?>
                                
                            </td>
                            <td id="<?=$paye->getId()?>">
                                <?=$paye->getModedepayement()?>
                                
                            </td>
                            <td>
                                <a href="#" id="<?=$paye->getId()?>" class="details btn btn-primary">Details</a>
                                <a href="updatepayement.php?id=<?=$paye->getId()?>" class="btn btn-warning">Modifier</a>
                                <a href="deletepayement.php?id=<?=$paye->getId()?>" class="suppression btn btn-danger">Supprimer</a>
                            </td>
                        </tr>
                        <?php
                            }
                        ?>
                      </table>
                      <a href="creatpayement.php" class="btn btn-primary">Faire un nouveau payement</a>
                  </div>
              </div>
          </div>
          <div class="panel panel-default col-sm-4">
            <div class="panel-heading">
              <h3 class="panel-title">consulter ici les detail de vos payements effectues</h3>
            </div>
            <div class="panel-body loader">
            merci pour la confiance que vous avez à notre égard.
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
                $('.loader').load('detailspayement.php?id='+id);
            });
        })
    </script>
</body>
<h3 align="center">Nos moyens de payement</h3>
<div id="carouselExempleSlideOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="../../../components/img/im1.png" alt="" class="d-block w-100">
        </div>
        <div class="carousel-item">
            <img src="../../../components/img/im3.jpg" alt="">
        </div>
    </div>
</div>
<br><br><br>
<div class="row g-3 align-items-center">
        <div class="col-3">
            <h5>Nous suivre</h5>
            <p class="form-text"></p>
        </div>
        <div class="col-5">
            <h5>Notre Newsletter</h5>
            <p class="form-text">Inscrivez vous pour etre informe a temps réel de nos nouveaux produits</p>
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                    <label for="inputEmail4" class="col-form-label">Votre Mail</label>
                </div>
                <div class="col-auto">
                    <input type="email" class="form-control">
                </div>
                <div class="col-auto">
                    <span class="btn btn-primary" type="button">Souscrire</span>
                </div>
            </div>
        </div>
        <div class="col-3">
            <h5>Nous Contacter</h5>
            <p class="form-text">Nous contacter sur marie@gmail.com notre mail</p>
            <p class="form-text">Nos contacts:</p>
            <p class="form-text">BP 443 Kara-togo</p>
        </div>
</div>
</html>