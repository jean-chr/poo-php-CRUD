<?php
    require_once('../../repositories/ProduitRepository.php');
    require_once('../../entities/Produit.php');
    require_once('../connectDB.php');

    if(isset($_GET['id']) && !empty($_GET['id'])){
        $id = htmlspecialchars($_GET['id']);

        $repo = new ProduitRepository($bd);

        $prodt = $repo->getOne($id);
    }
?>
<div class="card">
    <div class="row">
        libellet: <?=$prodt->getLibellet()?>
    </div>
    <div class="row">
        Prix: <?=$prodt->getPrix()?>
    </div>
    <div class="row">
        Promo: <?=$prodt->getPromo()?>
    </div>
</div>