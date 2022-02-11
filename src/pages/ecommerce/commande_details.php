<?php
    require_once('../../repositories/CommandeRepository.php');
    require_once('../../entities/commande.php');
    require_once('../connectDB.php');

    if(isset($_GET['id']) && !empty($_GET['id'])){
        $id = htmlspecialchars($_GET['id']);

        $repo = new CommandeRepository($bd);

        $prodt = $repo->getOne($id);
    }
?>
<div class="card">
    <div class="row">
        nom: <?=$prodt->getNom()?>
    </div>
    <div class="row">
        modepayement: <?=$prodt->getModepayement()?>
    </div>
    <div class="row">
        date: <?=$prodt->getDate()?>
    </div>
</div>