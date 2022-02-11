<?php
    require_once('../../repositories/ProduitRepository.php');
    require_once('../../entities/Produit.php');
    require_once('../connectDB.php');

    if(isset($_GET['id']) && !empty($_GET['id'])){
        $id = (int) htmlspecialchars($_GET['id']);
        $repo = new ProduitRepository($bd);
        $repo->delete($id);
        header('location:list.php?message=delete');
    }
?>
