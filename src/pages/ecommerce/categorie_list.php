<?php
require_once('../../repositories/CategorieRepository.php');
require_once('../../entities/categorie.php');
require_once('../connectDB.php');
?>
<!DOCTYPE html>
	<html>
		<head>
            <link rel="stylesheet" href="../../../components/css/bootstrap.css">
			<link rel="stylesheet" href="../../../components/css/style.css">
			<title>
				Liste des commandes
			</title>
		</head>
		<body>

			<nav>
              <ul class="menu">
                <li><a href="../../../index.php">Acceuil</a></li>
                <li><a class="text-light" href="client_list.php">client</a></li>
                <li><a  class="nav-link active" href="list.php">produits</a></li>
                <li><a href="commande_list.php">commande</a></li>
                <li><a href="listpayement.php">payement</a></li>
                <li><a href="categorie_list.php">categorie</a></li>
                <li><a href="livraison_list.php">livraison</a></li>
             </ul>
           </nav>

			<?php
		if (isset($_GET['message'])) {
			switch ($_GET['message']) {
				case 'update':
					echo '<div class="alert alert-success">Update successfully</div>';
					break;
				case 'delete':
					echo '<div class="alert alert-danger">Delete successfully</div>';
					break;
			}
		}
	 ?>
        <div class=" col-sm-8">
			<table class="table table-condensed table-striped">
				<tr>
					<th>#</th>
					<th>Genre</th>
					<th>libelle</th>
					<th>Action</th>
				</tr>
					<?php
						$repo = new CategorieRepository($bd);
						$response = $repo->getAll();

						 for($i=0; $i<count($response); $i++){
                                $repo = new Categorie($response[$i]);                   
					?>
					 <tr>
                            <td><?=$repo->getId()?></td>
                            <td id="<?=$repo->getId()?>">
                                <?=$repo->getgenre()?>   
                            </td>

                            <td id="<?=$repo->getId()?>">
                                <?=$repo->getLibelle()?>
                                
                            </td>
                            <td>
                                <a href="categorie_update.php?id=<?=$repo->getId()?>" class="btn btn-warning">Modifier</a>
                                <a href="categorie_delete.php?id=<?=$repo->getId()?>" class="suppression btn btn-danger">Supprimer</a>
                                <a href="#" id="<?=$repo->getId()?>" class="detail btn btn-primary">details</a>
                            </td>
                        </tr>
                         <?php
                            }
                        ?>
                         <a href="categorie_create.php" class="btn btn-primary">nouvelle commande</a>				
			</table>
        </div>   
        <div class="col-sm-4 loader">
            consulter les detail ici svp
        </div>
        <script src="../../../components/js/jquery.js"></script>
      <script src="../../../components/js/bootstrap.js"></script>


      <script>
        $(function(){
            $('.suppression').click(function(e){
                if(confirm("Voulez vous vraiment supprimer")){
                    alert("oui");
                }else{
                    alert("Non");
                }
            });

            $('.detail').click(function(e){
                var id = $(this).attr('id');
                $('.loader').load('categorie_details.php?id='+id);
            });
        })
    </script>
		</body>
	</html>