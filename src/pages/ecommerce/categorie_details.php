<?php
  require_once('../../repositories/CategorieRepository.php');
require_once('../../entities/categorie.php');
require_once('../connectDB.php');
    if(isset($_GET['id']) && !empty($_GET['id'])){
        $id = htmlspecialchars($_GET['id']);

        $repo = new CategorieRepository($bd);

        $com = $repo->getOne($id);
    }else {
        header('location:categorie_list.php?');
    }
?>
<!DOCTYPE html>
    <html>
        <head>
              <link rel="stylesheet" href="../../../components/css/bootstrap.css">
            <title></title>
        </head>
        <body>
           <div class="card">
    <div class="">
        <div class=""> <strong>genre:</strong><?=$com->getGenre()?></div>
    </div>
    <div class="">
        <div class=""><strong class="">libelle: </strong><?=$com->getLibelle()?></div>
    </div>
    <div class="">
       <div class=""><strong class=""> description: </strong><?=$com->getDescription()?></div>
    </div>
</div>
        </body>
    </html>
