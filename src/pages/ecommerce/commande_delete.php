<?php
    require_once('../../repositories/CommandeRepository.php');
    require_once('../../entities/commande.php');
    require_once('../connectDB.php');

    if(isset($_GET['id']) && !empty($_GET['id'])){
        $id = (int) htmlspecialchars($_GET['id']);
        $repo = new CommandeRepository($bd);
        $repo->delete($id);
        header('location:list.php?message=delete');
    }
?>
