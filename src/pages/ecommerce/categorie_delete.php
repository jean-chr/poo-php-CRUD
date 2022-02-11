<?php
require_once('../../entities/categorie.php');
require_once('../connectDB.php');
require_once('../../repositories/CategorieRepository.php');

 if(isset($_GET['id']) && !empty($_GET['id'])){
        $id = (int) htmlspecialchars($_GET['id']);
        $repo = new CategorieRepository($bd);
        $repo->delete($id);
        header('location:categorie_list.php?message=delete');
    }
?>