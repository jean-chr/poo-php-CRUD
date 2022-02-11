<?php
     require_once('../../repositories/ClientRepository.php');
     require_once('../../entities/client.php');
    require_once('../connectDB.php');

    if(isset($_GET['id']) && !empty($_GET['id'])){
        $id = (int) htmlspecialchars($_GET['id']);
        $repo = new ClientRepository($bd);
        $repo->delete($id);
        header('location:client_list.php?message=delete');
    }
?>
