<?php
    require_once('../../entities/payement.php');
    require_once('../connectDB.php');
    require_once('../../repositories/payementRepository.php');

    if(isset($_POST['submit']) && !empty($_POST['submit'])){
        $status = htmlspecialchars($_POST['submit']);
        $marieadmin = new payementRepository($bd);
        switch($status){
            case 'create': //Ici on fera l'insertion
                if(isset($_POST['datedepayement']) && !empty($_POST['datedepayement'])){
                    $data['datedepayement'] = $_POST['datedepayement'];
                    $data['modedepayement'] = $_POST['modedepayement'];
                    $data['somme'] = $_POST['somme'];
                    $payement = new Payement($data);
                    //var_dump($payement);
                    //On fait l'insertion
                    if($marieadmin->createpayement($payement)){
                        header('location:listpayement.php?message=inserted');
                    }else{
                        header('location:createpayement.php?error=vide');
                    }  
                }
                break;
            case 'update': //mise a jour ici
                if(isset($_POST['datedepayement']) && !empty($_POST['datedepayement'])){
                    $data['datedepayement'] = $_POST['datedepayement'];
                    $data['modedepayement'] = $_POST['modedepayement'];
                    $data['somme'] = $_POST['somme'];
                    $data['id'] = $_POST['id'];
                    $paye = new payement($data);
                    if($marieadmin->updatepayement($paye)){
                        header('location:listpayement.php?message=update faill');
                    }else{
                        header('location:listpayement.php?message=update');
                    }
                }
                break;
            case 'delete':
                if(isset($_POST['id'])){
                    $id=(int) $_POST['id'];
                    $suppression = $marieadmin->deletepayement($id);
                    if($suppression){
                        header('location:listpayement.php?message=delete fail');
                    }else{
                        header('location:listpayement.php?message=delete');
                    }
                }
                break;
        
        }    
    }        
?>