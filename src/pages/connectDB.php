<?php
    $user = 'root';
    $password = '';
    $dbname = 'groupe1';
    try{
        $bd = new PDO('mysql:host=localhost;dbname='.$dbname, $user, $password);
    }catch(PDOException $e){
        echo 'Erreur :'.$e->getMessage();
    }
?>
    