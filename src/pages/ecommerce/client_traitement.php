<?php
    require_once('../../repositories/ClientRepository.php');
    require_once('../../entities/Client.php');
    require_once('../connectDB.php');

    if(isset($_POST['submit']) && !empty($_POST['submit'])){
        $status = htmlspecialchars($_POST['submit']);
        $repo = new ClientRepository($bd);
        switch($status){
            case 'create': //Ici on fera l'insertion
                if(isset($_POST['nom']) && !empty($_POST['nom'])){
                    $guy['nom'] = $_POST['nom'];
                    $guy['prenom'] = $_POST['prenom'];
                    $guy['adresse'] = $_POST['adresse'];
                    $personne = new Client($guy);
                    //var_dump($personne);
                    //On fait l'insertion
                    $repo->create($personne);
                    header('location:client_list.php');
                }else{
                    header('location:client_create.php?error=vide');
                }
                break;
            case 'update': //Ici on fera la mis à jour
                if(isset($_POST['nom']) && !empty($_POST['nom'])){
                    $guy['nom'] = $_POST['nom'];
                    $guy['prenom'] = $_POST['prenom'];
                    $guy['adresse'] = $_POST['adresse'];
                    $guy['id'] = $_POST['id'];
                    $personne = new Client($guy);
                    //On fait l'update
                    $repo->update($personne);
                    header('location:client_list.php?message=update');
                }else{
                    header('location:client_create.php?error=vide');
                }
                break;
            case 'delete': // Ici on fera la suppession

                break;
            default: // Ici on va lister tout
                $response = $repo->getAll();
                header('location:client_list.php?items='.$reponse);
        }
    }
?>