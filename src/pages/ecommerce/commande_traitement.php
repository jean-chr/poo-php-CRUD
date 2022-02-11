<?php
    require_once('../../repositories/CommandeRepository.php');
    require_once('../../entities/commande.php');
    require_once('../connectDB.php');

    if(isset($_POST['persSubmit']) && !empty($_POST['persSubmit'])){
        $status = htmlspecialchars($_POST['persSubmit']);
        $repo = new CommandeRepository($bd);
        switch($status){
            case 'create': //Ici on fera l'insertion
                if(isset($_POST['nom']) && !empty($_POST['nom'])){
                    $jean['nom'] = $_POST['nom'];
                    $jean['modepayement'] = $_POST['modepayement'];
                    $jean['date'] = $_POST['date'];
                    $commande = new commande($jean);
                    $repo->create($commande);
                    header('location:commande_list.php');
                }else{
                    header('location:commande_create.php?error=vide');
                }
                break;
            case 'update': //Ici on fera la mis à jour
                if(isset($_POST['nom']) && !empty($_POST['nom'])){
                    $jean['nom'] = $_POST['nom'];
                    $jean['modepayement'] = $_POST['modepayement'];
                    $jean['date'] = $_POST['date'];
                    $jean['id'] = $_POST['id'];
                    $commande = new commande($jean);
                    //On fait l'update
                    $repo->update($commande);
                    header('location:commande_list.php?message=update');
                }else{
                    header('location:commande_create.php?error=vide');
                }
                break;
            case 'delete': // Ici on fera la suppession
                if(isset($_POST['nom']) && !empty($_POST['nom'])){
                    $jean['nom'] = $_POST['nom'];
                    $jean['modepayement'] = $_POST['modepayement'];
                    $jean['date'] = $_POST['date'];
                    $jean['id'] = $_POST['id'];
                    $commande = new commande($jean);
                    //On fait l'update
                    $repo->delete($commande);
                    header('location:commande_list.php');
                }else{
                    header('location:commande_create.php?error=vide');
                }

                break;
            default: // Ici on va lister tout
                $response = $repo->getAll();
                header('location:commande_list.php?items='.$reponse);
        }
    }
?>