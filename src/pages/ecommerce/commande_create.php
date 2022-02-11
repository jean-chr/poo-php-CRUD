<?php ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../components/css/bootstrap.css"/>
    <title>catégories commandes.</title>
</head>
<body class="well">
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand text-light" href="#">ECOMMERCE</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="../../../index.php" class="alert-link white">acceuil</a></li>
                    <li><a class="text-light" href="commande_list.php">liste des produits commandés</a></li>
                    <li><a href="commande_create.php">enregistrement des commandes</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container col-md-4 col-md-offset-3" style="margin-top: 70px;">
        <div class="">
            <div class="row">
                <h3 class="border border-raduis btn btn-primary form-control ">Nouvel enregistrement des commandes</h3>
            </div>
            <div class="row">
                <form action="commande_traitement.php" method="POST" class="form well">
                    <div class="form-group">
                        <label for="nom" class="form-label">Nom du produit</label>
                        <input type="text" name="nom" id="nom" class="form-control" required/>
                        <label for="modepayement" class="form-label">mode payement </label>
                        <select name="modepayement" id="modepayement" class="form-control">
                            <option value="flooz">flooz</option>
                            <option value="tmoney">tmoney</option>
                            <option value="paypal">paypal</option>
                            <option value="orange maoney">orange money</option>
                        </select>
                        <label for="date" class="form-label">date </label>
                        <input type="date" name="date" id="date" class="form-control" required/>
                    </div>
                    
                    <input type="submit" name="persSubmit" value="create" class="form-control btn btn-primary">
                </form>
            </div>
            
        </div>
    </div>
    <script src="../../../components/js/jquery.js"></script>
    <script src="../../../components/js/bootstrap.js"></script>
</body>
</html>