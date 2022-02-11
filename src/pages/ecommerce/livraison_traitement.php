<?php
    require_once('../../entities/Livraison.php');
    require_once('../../repositories/LivraisonRepository.php');
    require_once('../connectDB.php');

    if(isset($_POST['submit']) && !empty($_POST['submit'])){
        $action = htmlspecialchars($_POST['submit']);
        $repo = new LivraisonRepository($bd);
        switch($action){
            case 'create': //Ici on fera l'insertion
                if(isset($_POST['nom']) && !empty($_POST['nom'])){
                    $donnee['Nom'] = $_POST['nom'];
                    $donnee['Adresse'] = $_POST['adresse'];
                    $donnee['Contact'] = $_POST['contact'];
                    $Livraison = new Livraison($donnee);
                    $repo->create($Livraison);
                    header('location:livraison_list.php');
                }else{
                    header('location:livraison_create.php?error=vide');
                }
                break;
            case 'update': //Ici on fera la mis à jour
                if(isset($_POST['nom']) && !empty($_POST['nom'])){
                    $donnee['Nom'] = $_POST['nom'];
                    $donnee['Adresse'] = $_POST['adresse'];
                    $donnee['Contact'] = $_POST['contact'];
                    $donnee['id'] = $_POST['id'];
                    $Livraison = new Livraison($donnee);
                    //On fait l'update
                    $repo->update($Livraison);
                    header('location:livraison_list.php?message=update');
                }else{
                    header('location:livraison_create.php?error=vide');
                }
                break;
            case 'delete': // Ici on fera la suppession
                if(isset($_POST['nom']) && !empty($_POST['nom'])){
                    $donnee['Nom'] = $_POST['nom'];
                    $donnee['Adresse'] = $_POST['adresse'];
                    $donnee['Contact'] = $_POST['contact'];
                    $donnee['id'] = $_POST['id'];
                    $Livraison = new Livraison($donnee);
                    //On fait l'update
                    $repo->delete($id);
                    header('location:list.php');
                }else{
                    header('location:livraison_create.php?error=vide');
                }

                break;
            default: // Ici on va lister tout
                $response = $repo->getAll();
                header('location:livraison_list.php?items='.$reponse);
        }
    }
?>