<?php
    require_once('../../repositories/ClientRepository.php');
    require_once('../../entities/client.php');
    require_once('../connectDB.php');

    if(isset($_GET['id']) && !empty($_GET['id'])){
        $id = htmlspecialchars($_GET['id']);

        $repo = new ClientRepository($bd);

        $clien = $repo->getOne($id);
    }
?>
<div class="card">
    <div class="row">
        Nom: <?=$clien->getNom()?>
    </div>
    <div class="row">
        Prenom: <?=$clien->getPrenom()?>
    </div>
    <div class="row">
        Adresse: <?=$clien->getAdresse()?>
    </div>
</div>