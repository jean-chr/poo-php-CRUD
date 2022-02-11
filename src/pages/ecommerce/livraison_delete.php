<?php
    require_once('../../entities/Livraison.php');
    require_once('../../repositories/LivraisonRepository.php');
    require_once('../connectDB.php');

    if(isset($_GET['id']) && !empty($_GET['id'])){
        $id = (int) htmlspecialchars($_GET['id']);
        $repo = new LivraisonRepository($bd);
        $repo->delete($id);
        header('location:livraison_list.php?message=delete');
    }
?>
