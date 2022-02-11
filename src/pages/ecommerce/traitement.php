<?php
    require_once('../../repositories/ProduitRepository.php');
    require_once('../../entities/Produit.php');
    require_once('../connectDB.php');

    if(isset($_POST['persSubmit']) && !empty($_POST['persSubmit'])){
        $status = htmlspecialchars($_POST['persSubmit']);
        $repo = new ProduitRepository($bd);
        switch($status){
            case 'create': //Ici on fera l'insertion
                if(isset($_POST['libellet']) && !empty($_POST['libellet'])){
                    $gafar['libellet'] = $_POST['libellet'];
                    $gafar['prix'] = $_POST['prix'];
                    $gafar['promo'] = $_POST['promo'];
                    $produit = new Produit($gafar);
                    $repo->create($produit);
                    header('location:list.php');
                }else{
                    header('location:create.php?error=vide');
                }
                break;
            case 'update': //Ici on fera la mis à jour
                if(isset($_POST['libellet']) && !empty($_POST['libellet'])){
                    $gafar['libellet'] = $_POST['libellet'];
                    $gafar['prix'] = $_POST['prix'];
                    $gafar['promo'] = $_POST['promo'];
                    $gafar['id'] = $_POST['id'];
                    $produit = new Produit($gafar);
                    //On fait l'update
                    $repo->update($produit);
                    header('location:list.php?message=update');
                }else{
                    header('location:create.php?error=vide');
                }
                break;
            case 'delete': // Ici on fera la suppession
                if(isset($_POST['libellet']) && !empty($_POST['libellet'])){
                    $gafar['libellet'] = $_POST['libellet'];
                    $gafar['prix'] = $_POST['prix'];
                    $gafar['promo'] = $_POST['promo'];
                    $gafar['id'] = $_POST['id'];
                    $produit = new Produit($gafar);
                    //On fait l'update
                    $repo->delete($produit);
                    header('location:list.php');
                }else{
                    header('location:create.php?error=vide');
                }

                break;
            default: // Ici on va lister tout
                $response = $repo->getAll();
                header('location:list.php?items='.$reponse);
        }
    }
?>