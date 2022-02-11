<?php
    require_once('../../entities/Livraison.php');
    require_once('../../repositories/LivraisonRepository.php');
    require_once('../connectDB.php');

    if(isset($_GET['id']) && !empty($_GET['id'])){
        $id = htmlspecialchars($_GET['id']);

        $selete = new LivraisonRepository($bd);

        $selectOne = $selete->getOne($id);
    
    }else {
        header('location:livraison_list.php?');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../components/css/bootstrap.css"/>
    <title>Document</title>
</head>
<body>
    <div class="card">
    <div class="">
        <div class=""> <strong>nom:</strong><?=$selectOne->getNom()?></div>
    </div>
    <div class="">
        <div class=""><strong class="">adresse:</strong><?=$selectOne->getAdresse()?></div>
    </div>
    <div class="">
       <div class=""><strong class=""> tel:</strong><?=$selectOne->getContact()?></div>
    </div>
</div>
</body>
</html>
