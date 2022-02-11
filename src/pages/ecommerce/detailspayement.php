<?php
    require_once('../../entities/payement.php');
    require_once('../connectDB.php');
    require_once('../../repositories/payementRepository.php');

    if(isset($_GET['id']) && !empty($_GET['id'])){
        $id = htmlspecialchars($_GET['id']);
        $marieadmin= new payementRepository($bd);

        $paye = $marieadmin->getOne($id);
    }
?>
<div class="card">
    <div class="row">
        Date de payement: <?=$paye->getDatedepayement()?>
    </div>
    <div class="row">
        Mode de payement: <?=$paye->getModedepayement()?>
    </div>
    <div class="row">
        Somme: <?=$paye->getSomme()?>
    </div>
</div>