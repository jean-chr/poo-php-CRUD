<?php
require_once('../connectDB.php');
require_once('../../entities/categorie.php');
require_once('../../repositories/CategorieRepository.php');

if (isset($_POST['submit']) && !empty($_POST['submit'])) {
	$status = htmlspecialchars($_POST['submit']);
	$repo = new CategorieRepository($bd);
        switch($status){
            case 'create': //Ici on fera l'insertion
                if(isset($_POST['genre']) && !empty($_POST['genre'])){
                    $data['genre'] = $_POST['genre'];
                    $data['libelle'] = $_POST['libelle'];
                    $data['description'] = $_POST['description'];
                    $categorie = new Categorie($data);
                    //var_dump($categorie);
                    //On fait l'insertion
                    $repo->create($categorie);
                    header('location:categorie_list.php');
                }else{
                    header('location:categorie_create.php?error=vide');
                }
                break;
            case 'update': //Ici on fera la mis à jour
                if(isset($_POST['genre']) && !empty($_POST['genre'])){
                    $data['genre'] = $_POST['genre'];
                    $data['libelle'] = $_POST['libelle'];
                    $data['description'] = $_POST['description'];
                    $data['id'] = $_POST['id'];
                    $categorie = new Categorie($data);
                    //On fait l'update
                    $repo->update($categorie);
                    header('location:categorie_list.php?message=update');
                }else{
                    header('location:categorie_create.php?error=vide');
                }
                break;
            case 'delete': // Ici on fera la suppession

                break;
            default: // Ici on va lister tout
                $response = $repo->getAll();
                header('location:categorie_list.php?items='.$reponse);
        }
    }
?>