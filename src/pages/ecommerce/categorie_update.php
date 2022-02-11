<?php
   require_once('../../entities/categorie.php');
   require_once('../connectDB.php');
require_once('../../repositories/CategorieRepository.php');

    if(isset($_GET['id']) && !empty($_GET['id'])){
        $id = (int)htmlspecialchars($_GET['id']);
        
        $categorieRepo = new CategorieRepository($bd);

        $repo = $categorieRepo->getOne($id);
    }
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../../components/css/style.css">
    <link rel="stylesheet" href="../../../components/css/bootstrap.css">
    <title>mise a jour</title>
</head>
<body class="well">
<div class="">
         <nav>
              <ul class="menu">
                <li><a href="../../../index.php">Acceuil</a></li>
                <li><a href="categorie_list.php">Liste des commandes</a></li>
                <li><a href="categorie_create.php">nouvelle commandes</a></li>
             </ul>
           </nav>
     </div>
   
<div class="container col-md-6">
            <div class=" ">
                <p>Modifiez votre commande a l'aide de ce formulaire.</p>
                <h3 class="panel-heading bg-primary  ">Modification de la commande</h3>
            </div>
            <div class="">
                <form action="categorie_traitement.php" method="POST" class="well">
                    <input type="hidden" name="id" class="form-control" value="<?=$repo->getId()?>"/>
                    <div class="form-group">
                        <label for="genre" class="form-label">Genre:</label>
                         <select id="genre" class="form-select" name="genre">
                            <option value="<?=$repo->getGenre()?>"/></option>
                            <option value="Informatique">Informatique</option>
                            <option value="Menagere">Menagere</option>
                            <option value="Autres">Autres</option>
                        </select>
                     
                    </div>
                    <div class="form-group">
                        <label for="libelle" class="form-label">libelle:</label>
                        <input type="text" name="libelle" id="libelle" class="form-control" value="<?=$repo->getLibelle()?>"/>
                    </div>
                    <div class="form-group">
                        <label for="description" class="form-label">Description: </label>
                        <input type="text" name="description" id="description" class="form-control" value="<?=$repo->getDescription()?>"/>
                    </div>
                    
                    <input type="submit" name="submit" value="update" class="form-control btn btn-primary">
                </form>
            </div>
    </div>
    <script src="../../../component/js/bootstrap.min.js"></script>
    <script src="../../../components/js/jquery.min.js"></script>
</body>
</html>

